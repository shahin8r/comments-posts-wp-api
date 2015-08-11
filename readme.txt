=== Comments Posts WP API ===
Contributors: shahin8r
Tags: comments, posts, post, api, wp-api, rest
Requires at least: 3.0.0
Tested up to: 4.2.4
Stable tag: 1.0.0
License: MIT
License URI: http://opensource.org/licenses/MIT

Plugs comments data into the /posts endpoint in WordPress JSON API (WP-API).

== Description ==

Gets your posts and comments with one API call by putting comments inside the /posts endpoint. This way there is no need to do separate API call to `/wp-json/posts/ID/comments`.

== Installation ==

1. Unzip and upload the `comments-posts-wp-api` directory to `/wp-content/plugins/`
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Add `withcomments` in the URI (e.g `/wp-json/posts?withcomments` or `/wp-json/posts?filter[posts_per_page]=5&withcomments`)

== Changelog ==

= 1.0.0 =

Initial release