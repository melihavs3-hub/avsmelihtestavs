<?php
// Hata raporlamayı aç
error_reporting(E_ALL);
ini_set('display_errors', 1);

function fetch_posts() {
    $url = 'https://vitriol.ltd/wp-json/wp/v2/posts';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
    }
    curl_close($ch);
    return $response;
}

function cache_posts($data) {
    file_put_contents('cache/posts.json', $data);
}

function get_cached_posts() {
    return file_get_contents('cache/posts.json');
}

function update_cache_if_needed() {
    $cache_file = 'cache/posts.json';
    $cache_time = 3600; // 1 saat

    if (!file_exists($cache_file) || (time() - filemtime($cache_file)) > $cache_time) {
        $posts = fetch_posts();
        if ($posts === false) {
            echo 'Error fetching posts';
            return;
        }
        cache_posts($posts);
    }
}

function fetch_media($media_id) {
    $media_url = 'https://vitriol.ltd/wp-json/wp/v2/media/' . $media_id;
    $media_response = file_get_contents($media_url);
    if ($media_response === false) {
        echo 'Error fetching media: ' . $media_id;
    }
    return json_decode($media_response, true);
}

function cache_media($media_id, $data) {
    file_put_contents('cache/media_' . $media_id . '.json', json_encode($data));
}

function get_cached_media($media_id) {
    $cache_file = 'cache/media_' . $media_id . '.json';
    if (file_exists($cache_file)) {
        return json_decode(file_get_contents($cache_file), true);
    } else {
        return null;
    }
}

function update_media_cache_if_needed($media_id) {
    $cache_file = 'cache/media_' . $media_id . '.json';
    $cache_time = 3600; // 1 saat

    if (!file_exists($cache_file) || (time() - filemtime($cache_file)) > $cache_time) {
        $media_data = fetch_media($media_id);
        if ($media_data === false) {
            echo 'Error updating media cache: ' . $media_id;
            return;
        }
        cache_media($media_id, $media_data);
    }
}

function get_media_url($media_id, $size = 'thumbnail') {
    update_media_cache_if_needed($media_id);
    $media_data = get_cached_media($media_id);

    if ($media_data && isset($media_data['media_details']['sizes'][$size])) {
        return $media_data['media_details']['sizes'][$size]['source_url'];
    } else {
        return $media_data['source_url'] ?? '';
    }
}

function get_wp_posts() {
    update_cache_if_needed();
    $posts = json_decode(get_cached_posts(), true);

    if ($posts === null) {
        echo 'Error decoding JSON';
        print_r(get_cached_posts());
        return [];
    }

    $result = [];

    foreach ($posts as $post) {
        $title = $post['title']['rendered'];
        $excerpt = $post['excerpt']['rendered'];
        $date = new DateTime($post['date']);
        $formatted_date = $date->format('d M Y'); // Gün Ay Yıl formatı
        $link = $post['link'];
        $image_url = '';

        if (isset($post['featured_media']) && $post['featured_media'] != 0) {
            $image_url = get_media_url($post['featured_media']);
        }

        $result[] = [
            'title' => $title,
            'excerpt' => $excerpt,
            'date' => $formatted_date,
            'link' => $link,
            'image_url' => $image_url
        ];
    }

    return $result;
}
?>
