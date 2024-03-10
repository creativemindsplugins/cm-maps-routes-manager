<?php
use com\cminds\mapsroutesmanager\App;
$cminds_plugin_config = array(
    'plugin-is-pro'                 => App::isPro(),
    'plugin-is-addon'               => FALSE,
    'plugin-version'                => App::getVersion(),
    'plugin-abbrev'                 => App::PREFIX,
    'plugin-parent-abbrev'          => '',
    'plugin-affiliate'              => '',
    'plugin-redirect-after-install' => admin_url( 'admin.php?page=cmmrm-settings' ),
    'plugin-show-guide'             => TRUE,
    'plugin-guide-text'             => '    <div style="display:block">
        <ol>
         <li>Go to the plugin <strong>"Setting"</strong></li>
         <li>Get a <strong>Google Maps Browser APP Key</strong> and add it to the plugin settings. </li>
            <li>From the plugin settings click on the <strong>user dashboard</strong> link</li>
            <li>Add your first route. You need to pin the route locations and waypoints on the Google map and you can also add a description and images.</li>
            <li><strong>View</strong> the route</li>
            <li>In the <strong>Plugin Settings</strong> you can click on the link of all routes to view them all on one map.</li>
            <li><strong>Troubleshooting:</strong> Make sure that you are using Post name permalink structure in the WP Admin Settings -> Permalinks.</li>
            <li><strong>Troubleshooting:</strong> If post type archive does not show up or displays 404 then install Rewrite Rules Inspector plugin and use the Flush rules button.</li>
            <li><strong>Troubleshooting:</strong> Get the Google Maps Browser APP Key. Plugin will not work without it.</li>
        </ol>
    </div>',
    'plugin-upgrade-text'           => 'Upgrade to pro',
    'plugin-upgrade-text-list'      => array(
        array( 'title' => 'Routes editing advanced features', 'video_time' => '0:06' ),
        array( 'title' => 'Share your route', 'video_time' => '0:39' ),
        array( 'title' => 'Elevation graph display', 'video_time' => '1:18' ),
        array( 'title' => 'Downlaod GPX / KML files', 'video_time' => '2:03' ),
        array( 'title' => 'Route tooltips', 'video_time' => '2:57' ),
        array( 'title' => 'Route rating', 'video_time' => '3:24' ),
        array( 'title' => 'Drawing and editing routes', 'video_time' => '4:00' ),
        array( 'title' => 'Import route from GPX / KML files', 'video_time' => '5:34' ),
        array( 'title' => 'Setting custom icons', 'video_time' => '6:45' ),
        array( 'title' => 'Adding images and video', 'video_time' => '7:25' ),
        array( 'title' => 'Route index page', 'video_time' => '8:04' ),
        array( 'title' => 'Filtering routes by categories', 'video_time' => '10:04' ),
        array( 'title' => 'Access control', 'video_time' => '11:51' ),
        array( 'title' => 'User dashboard', 'video_time' => '12:36' ),
    ),
    'plugin-upgrade-video-height'   => 240,
    'plugin-upgrade-videos'         => array(
        array( 'title' => 'Routes Manager premium features', 'video_id' => '289681964' ),
    ),
    'plugin-guide-video-height'     => 240,
    'plugin-guide-videos'           => array(
        array( 'title' => 'Installation tutorial', 'video_id' => '161022218' ),
    ),
    'plugin-show-shortcodes'        => TRUE,
    'plugin-shortcodes'             => '<p>You can use the following available shortcodes.</p>',
    'plugin-shortcodes-action'      => 'cmmrm_display_supported_shortcodes',
    'plugin-settings-url'           => admin_url( 'admin.php?page=cmmrm-settings' ),
    'plugin-file'                   => App::getPluginFile(),
    'plugin-dir-path'               => plugin_dir_path( App::getPluginFile() ),
    'plugin-dir-url'                => plugin_dir_url( App::getPluginFile() ),
    'plugin-basename'               => plugin_basename( App::getPluginFile() ),
    'plugin-icon'                   => '',
    'plugin-name'                   => App::PLUGIN_NAME,
    'plugin-license-name'           => App::PLUGIN_NAME,
    'plugin-campign'                 => '?utm_source=routesfree&utm_campaign=freeupgrade',
    'plugin-slug'                   => App::PREFIX,
    'plugin-short-slug'             => App::PREFIX,
    'plugin-parent-short-slug'      => '',
    'plugin-menu-item'              => App::PREFIX,
    'plugin-textdomain'             => '',
    'plugin-userguide-key'          => '2737-cm-maps-route-manager-cmmrm-free-version-tutorial',
    'plugin-video-tutorials-url'          => 'https://www.cminds.com/video-lesson/lesson/maps-route-manager-plugin-tutorials/',
    'plugin-store-url'              => 'https://www.cminds.com/wordpress-plugins-library/maps-routes-manager-plugin-for-wordpress-by-creativeminds?utm_source=routes&utm_campaign=freeupgrade&upgrade=1',
    'plugin-support-url'            => 'https://www.cminds.com/contact/',
    'plugin-review-url'             => 'https://www.cminds.com/wordpress-plugins-library/google-maps-routes-manager-plugin-for-wordpress-by-creativeminds/#reviews',
    'plugin-changelog-url'          => 'https://www.cminds.com/wordpress-plugins-library/maps-routes-manager-plugin-for-wordpress-by-creativeminds/#changelog',
    'plugin-licensing-aliases'      => App::getLicenseAdditionalNames(),
    'plugin-compare-table'          => '
            <div class="pricing-table" id="pricing-table"><h2 style="padding-left:10px;">Upgrade The Routes Manager Plugin:</h2>
                <ul>
                    <li class="heading" style="background-color:red;">Current Edition</li>
                    <li class="price">FREE<br /></li>
                    <li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Draw routes on Google map</li>
                    <li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Add description and images</li>
                    <li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Show all routes on a map</li>
                    <hr>
                    Other CreativeMinds Offerings
                    <hr>
                 <a href="https://www.cminds.com/wordpress-plugins-library/seo-keyword-hound-wordpress?utm_source=routes&utm_campaign=freeupgrade&upgrade=1" target="blank"><img src="' . plugin_dir_url( __FILE__ ). 'views/Hound2.png"  width="220"></a><br><br><br>
                <a href="https://www.cminds.com/store/cm-wordpress-plugins-yearly-membership?utm_source=routes&utm_campaign=freeupgrade&upgrade=1" target="blank"><img src="' . plugin_dir_url( __FILE__ ). 'views/banner_yearly-membership_220px.png"  width="220"></a><br>
               </ul>
                <ul>
                   <li class="heading">Pro<a href="https://www.cminds.com/wordpress-plugins-library/maps-routes-manager-plugin-for-wordpress-by-creativeminds?utm_source=routes&utm_campaign=freeupgrade&upgrade=1" style="float:right;font-size:11px;color:white;" target="_blank">More</a></li>
                    <li class="price">$39.00<br /> <span style="font-size:14px;">(For one Year / Site)<br />Additional pricing options available <a href="https://www.cminds.com/wordpress-plugins-library/maps-routes-manager-plugin-for-wordpress-by-creativeminds?utm_source=routes&utm_campaign=freeupgrade&upgrade=1" target="_blank"> >>> </a></span> <br /></li>
                    <li class="action"><a href="https://www.cminds.com/?edd_action=add_to_cart&download_id=54033&edd_options[price_id]=1&utm_source=routes&utm_campaign=freeupgrade&upgrade=1" style="font-size:18px;" target="_blank">Upgrade Now</a></li>
                     <li style="text-align:left;"><span class="dashicons dashicons-yes"></span>All Free Version Features <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="All free features are supported in the pro"></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Upload route from a KML/GPX file<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Routes can be imported from a device that generates a KML/GPX file. Mobile phones and navigation devices can generate such files."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Export route to a KML/GPX file<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Routes created can later be exported to a KML/GPX file and shared with mobile devices, other travel sites, and navigation aids."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Altitude graph<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Altitude is added per each trail view and is also accompanied by information such as trail distance, average speed, peak altitude, and more."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Images and Video<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Images and video can be added to both trail information and each route or per specific locations along the route"></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Categories<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Routes can be assigned to categories and filtered by categories"></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Tags<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Tags can be added to routes and allow filtering of routes"></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Shortcodes<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Several shortcodes are supported. Shortcodes can be embedded in posts and show a single trail, a map with all trails in a category, and more."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Search<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Trail description, locations, and route name can be searched by keywords."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Search route by a zip code<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Once a route has one location added to it you can add a zip search for all routes available in your routes index page and find all routes which fall into a specific zip code."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Custom icons<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Upload your own custom icons to mark locations along the route."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Taxonomies<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="More taxonomies such as route difficulty and route type."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Vote for a route<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Plugin displays a star rating for a route and users can vote for it."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Access control<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Set which role can create or view routes."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Translate text labels<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Modify all text labels in the plugin."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Moderation and notifications<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Admin can moderate routes submitted by users. Admin can recieve notifications for new routes submitted by users. User can be notified when his route was approved."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>User Dashboard<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="User can view and edit all his routes in a dashboard showing all his posted routes."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Tooltips<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="User can add tooltips to the routes map for each location and can determine the amount of information in the tooltip. Tooltip can automaticly show once route loads"></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Weather information<<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Weather information is shown near each location."></span></li>
                 <li class="support" style="background-color:lightgreen; text-align:left; font-size:14px;"><span class="dashicons dashicons-yes"></span> One year of expert support <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="You receive 365 days of WordPress expert support. We will answer questions you have and also support any issue related to the plugin. We will also provide on-site support."></span><br />
                         <span class="dashicons dashicons-yes"></span> Unlimited product updates <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="During the license period, you can update the plugin as many times as needed and receive any version release and security update"></span><br />
                        <span class="dashicons dashicons-yes"></span> Plugin can be used forever <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="Once license expires, If you choose not to renew the plugin license, you can still continue to use it as long as you want."></span><br />
                        <span class="dashicons dashicons-yes"></span> Save 40% once renewing license <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="Once license expires, If you choose to renew the plugin license you can do this anytime you choose. The renewal cost will be 35% off the product cost."></span></li>
                 </ul>
    <ul>
        <li class="heading">Mapping Plugins Deluxe <a href="https://www.cminds.com/store/map-locations-plugin-for-wordpress-by-creativeminds?utm_source=routes&utm_campaign=freeupgrade&upgrade=1" style="float:right;font-size:11px;color:white;" target="_blank">More</a></li>
        <li class="price">$69.00<br /> <span style="font-size:14px;">(For one Year / Site)<br />Additional pricing options available <a href="https://www.cminds.com/store/map-locations-plugin-for-wordpress-by-creativeminds?utm_source=routes&utm_campaign=freeupgrade&upgrade=1" target="_blank"> >>> </a></span> <br /></li>
         <li class="action"><a href="https://www.cminds.com/?edd_action=add_to_cart&download_id=73574&edd_options[price_id]=1&utm_source=routes&utm_campaign=freeupgrade&upgrade=1" style="font-size:18px;" target="_blank">Upgrade Now</a></li>
         <li style="text-align:left;"><span class="dashicons dashicons-yes"></span>All Free and Pro Version Features <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="All free and pro features are supported in the pro"></span></li>
        <li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Location plugin premium<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Includes the location manager premium version plugin. User can add locations to Google Maps."></span></li>
                  <li class="support" style="background-color:lightgreen; text-align:left; font-size:14px;"><span class="dashicons dashicons-yes"></span> One year of expert support <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="You receive 365 days of WordPress expert support. We will answer questions you have and also support any issue related to the plugin. We will also provide on-site support."></span><br />
                         <span class="dashicons dashicons-yes"></span> Unlimited product updates <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="During the license period, you can update the plugin as many times as needed and receive any version release and security update"></span><br />
                        <span class="dashicons dashicons-yes"></span> Plugin can be used forever <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="Once license expires, If you choose not to renew the plugin license, you can still continue to use it as long as you want."></span><br />
                        <span class="dashicons dashicons-yes"></span> Save 40% once renewing license <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="Once license expires, If you choose to renew the plugin license you can do this anytime you choose. The renewal cost will be 35% off the product cost."></span></li>
   </ul>
    <ul>
        <li class="heading">Mapping Plugins Ultimate <a href="https://www.cminds.com/store/map-locations-plugin-for-wordpress-by-creativeminds?utm_source=routes&utm_campaign=freeupgrade&upgrade=1" style="float:right;font-size:11px;color:white;" target="_blank">More</a></li>
        <li class="price">$119.00<br /> <span style="font-size:14px;">(For one Year / Site)<br />Additional pricing options available <a href="https://www.cminds.com/store/map-locations-plugin-for-wordpress-by-creativeminds?utm_source=routes&utm_campaign=freeupgrade&upgrade=1" target="_blank"> >>> </a></span> <br /></li>
         <li class="action"><a href="https://www.cminds.com/?edd_action=add_to_cart&download_id=174519&edd_options[price_id]=1&utm_source=routes&utm_campaign=freeupgrade&upgrade=1" style="font-size:18px;" target="_blank">Upgrade Now</a></li>
         <li style="text-align:left;"><span class="dashicons dashicons-yes"></span>All Free, Pro and Deluxe Version Features <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="All free, pro and deluxe features are supported in the pro"></span></li>
        <li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Routes custom fields addon<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Includes the routes custom fields addon which lets you add additional fields to each route post."></span></li>
        <li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Peepso routes and location addons<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Includes the Peepso routes and location addons, Peepso let you integreate the mapping plugin into a social network you can create on your WP site."></span></li>
                 <li class="support" style="background-color:lightgreen; text-align:left; font-size:14px;"><span class="dashicons dashicons-yes"></span> One year of expert support <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="You receive 365 days of WordPress expert support. We will answer questions you have and also support any issue related to the plugin. We will also provide on-site support."></span><br />
                         <span class="dashicons dashicons-yes"></span> Unlimited product updates <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="During the license period, you can update the plugin as many times as needed and receive any version release and security update"></span><br />
                        <span class="dashicons dashicons-yes"></span> Plugin can be used forever <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="Once license expires, If you choose not to renew the plugin license, you can still continue to use it as long as you want."></span><br />
                        <span class="dashicons dashicons-yes"></span> Save 40% once renewing license <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="Once license expires, If you choose to renew the plugin license you can do this anytime you choose. The renewal cost will be 35% off the product cost."></span></li>
            <li class="heading" style="background-color:orange">BEST VALUE</li>
            </ul>
            </div>',
);
