// ========================================================
// Template Name: Affan - PWA Mobile HTML Template
// Author: Designing World
// Author URL: https://themeforest.net/user/designing-world
// ========================================================

const staticCacheName = 'cache-v1.6.0';
const dynamicCacheName = 'runtimeCache-v1.6.0';

// Pre Caching Assets
const precacheAssets = [
    '/',
    'js/pwa.js',
    'manifest.json',
    'fallback.html'
];

// Install Event
self.addEventListener('install', function (event) {
    event.waitUntil(
        caches.open(staticCacheName).then(function (cache) {
            return cache.addAll(precacheAssets);
        })
    );
});

// Activate Event
self.addEventListener('activate', function (event) {
    event.waitUntil(
        caches.keys().then(keys => {
            return Promise.all(keys
                .filter(key => key !== staticCacheName && key !== dynamicCacheName)
                .map(key => caches.delete(key))
            );
        })
    );
});

// Fetch Event
self.addEventListener('fetch', function (event) {
    event.respondWith(
        caches.match(event.request).then(cacheRes => {
            return cacheRes || fetch(event.request).then(response => {
                return caches.open(dynamicCacheName).then(function (cache) {
                    cache.put(event.request, response.clone());
                    return response;
                })
            });
        }).catch(function() {
            // Fallback Page, When No Internet Connection
            return caches.match('fallback.html');
          })
    );
});