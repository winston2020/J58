<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
                @foreach($mulu as $item)
                    <sitemap>
                        <loc>{{$item}}</loc>
                        <lastmod>{{date('Y-m-d')}}</lastmod>
                        <changefreq>daily</changefreq>
                        <priority>0.8</priority>
                    </sitemap>
                @endforeach

                @foreach($data as $item)
                    <sitemap>
                        <loc>{{$item}}</loc>
                        <lastmod>{{date('Y-m-d')}}</lastmod>
                        <changefreq>daily</changefreq>
                        <priority>0.8</priority>
                    </sitemap>
                @endforeach
</sitemapindex>