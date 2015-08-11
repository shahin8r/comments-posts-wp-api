# Comments Posts WP API

Gets your posts and comments with one API call by putting comments inside the /posts endpoint. This way there is no need to do separate API call to `/wp-json/posts/ID/comments`.

## Installation

1. Unzip and upload the `comments-posts-wp-api` directory to `/wp-content/plugins/`
2. Activate the plugin through the 'Plugins' menu in WordPress

## Usage

Add `withcomments` in the URI.

Example: `/wp-json/posts?withcomments` or `/wp-json/posts?filter[posts_per_page]=5&withcomments`