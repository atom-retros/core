<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * The items to be inserted into the database.
     */
    protected array $items = [
        [
            'key' => 'theme',
            'value' => 'atom',
            'comment' => 'Specifies the active CMS theme',
        ],
        [
            'key' => 'hotel_name',
            'value' => 'Atom',
            'comment' => 'Specifies the name of the hotel',
        ],
        [
            'key' => 'rcon_ip',
            'value' => '127.0.0.1',
            'comment' => 'Specifies the RCON IP used for the CMS to perform RCON commands',
        ],
        [
            'key' => 'rcon_port',
            'value' => '3001',
            'comment' => 'Specifies the RCON port used for the CMS to perform RCON commands',
        ],
        [
            'key' => 'start_motto',
            'value' => 'This is my motto',
            'comment' => 'Specifies the start motto the user gets assigned upon registration',
        ],
        [
            'key' => 'start_credits',
            'value' => '5000',
            'comment' => 'Specifies the amount of credits a user receives upon registration',
        ],
        [
            'key' => 'start_duckets',
            'value' => '5000',
            'comment' => 'Specifies the amount of duckets a user receives upon registration',
        ],
        [
            'key' => 'start_diamonds',
            'value' => '100',
            'comment' => 'Specifies the amount of diamonds a user receives upon registration',
        ],
        [
            'key' => 'start_points',
            'value' => '0',
            'comment' => 'Specifies the amount of points a user receives upon registration',
        ],
        [
            'key' => 'avatar_imager',
            'value' => 'https://www.habbo.com/habbo-imaging/avatarimage?figure=',
            'comment' => 'The base url for the imager used to render avatars on the CMS',
        ],
        [
            'key' => 'start_look',
            'value' => 'fa-201407-1324.hr-828-1035.ch-3001-1261-1408.sh-3068-92-1408.cp-9032-1308.lg-270-1281.hd-209-3',
            'comment' => 'Sets the starting outfit for any new user registering',
        ],
        [
            'key' => 'referrals_needed',
            'value' => '5',
            'comment' => 'Specifies the amount of referrals needed before being able to claim the referral reward',
        ],
        [
            'key' => 'referral_reward_amount',
            'value' => '30',
            'comment' => 'Specifies the reward amount when a user claims a reward',
        ],
        [
            'key' => 'referral_reward_currency_type',
            'value' => 'diamonds',
            'comment' => 'Specify what type of currency that are given upon referral reward claim (credits, duckets, diamonds, points)',
        ],
        [
            'key' => 'point_currency_number',
            'value' => '101',
            'comment' => 'Determines what number the points currency type is',
        ],
        [
            'key' => 'discord_invitation_link',
            'value' => 'https://discord.gg/rX3aShUHdg',
            'comment' => 'The link used to invite people to your Discord server',
        ],
        [
            'key' => 'discord_widget_id',
            'value' => '1008150166521524264',
            'comment' => 'The Discord widget ID you want to show on the CMS',
        ],
        [
            'key' => 'min_staff_rank',
            'value' => '4',
            'comment' => 'The minimum rank before being considered a staff member',
        ],
        [
            'key' => 'min_rank_to_see_hidden_staff',
            'value' => '6',
            'comment' => 'The minimum rank to enable seeing hidden staff ranks & members',
        ],
        [
            'key' => 'badges_path',
            'value' => '/client/flash/c_images/album1584',
            'comment' => 'The path to the badges folder',
        ],
        [
            'key' => 'group_badge_path',
            'value' => '/client/flash/c_images/Badgeparts/generated',
            'comment' => 'The path that contains all the generated group badges',
        ],
        [
            'key' => 'maintenance_enabled',
            'value' => '0',
            'comment' => 'Determines whether maintenance is enabled or not',
        ],
        [
            'key' => 'min_maintenance_login_rank',
            'value' => '5',
            'comment' => 'The minimum rank required to login to the hotel during maintenance',
        ],
        [
            'key' => 'maintenance_message',
            'value' => "We're working very hard on making the hotel the best possible version of itself 💛<br><br> We want to make sure the hotel lives up to the standards you deserve, hence we currently have no ETA for when we can open our doors.<br><br>We promise that once we feel confident that the hotel is ready for launch, we'll let everyone know about it.<br><br>- The Management Team ⭐",
            'comment' => 'The maintenance message displayed to users while maintenance is activated',
        ],
        [
            'key' => 'username_regex',
            'value' => '/^[a-zA-Z0-9_.-]+$/u',
            'comment' => 'The regex used to validate username input fields',
        ],
        [
            'key' => 'min_housekeeping_rank',
            'value' => '6',
            'comment' => 'The minimum rank required to see the housekeeping button',
        ],
        [
            'key' => 'housekeeping_url',
            'value' => 'https://hk.example.com',
            'comment' => 'The subdomain which the HK is hosted on',
        ],
        [
            'key' => 'max_accounts_per_ip',
            'value' => '2',
            'comment' => 'The maximum allowed accounts registered per IP address',
        ],
        [
            'key' => 'google_recaptcha_enabled',
            'value' => '0',
            'comment' => 'Toggles whether google recaptcha is enabled or not - Do not enable if turnstile is enabled',
        ],
        [
            'key' => 'cloudflare_turnstile_enabled',
            'value' => '1',
            'comment' => 'Determines whether cloudflare turnstile is enabled or not - Do not enable if google recaptche is enabled',
        ],
        [
            'key' => 'vpn_block_enabled',
            'value' => '0',
            'comment' => 'Toggles whether the VPN blocker is enabled or not',
        ],
        [
            'key' => 'cms_logo',
            'value' => '/images/kasja_atomlogo.png',
            'comment' => 'Default logo for the cms',
        ],
        [
            'key' => 'cms_header',
            'value' => '/images/kasja_mepage_header.png',
            'comment' => 'Default header for the me page',
        ],
        [
            'key' => 'cms_me_backdrop',
            'value' => '/images/kasja_mepage_image.png',
            'comment' => 'Default backdrop header for the me page',
        ],
        [
            'key' => 'room_thumbnail_path',
            'value' => '/client/flash/c_images/rooms',
            'comment' => 'Path to room thumbnails',
        ],
        [
            'key' => 'hotel_home_room',
            'value' => '0',
            'comment' => 'The homeroom every new users will be assigned to, leave as 0 if you do not wish to assign any home room',
        ],
        [
            'key' => 'cms_color_mode',
            'value' => 'light',
            'comment' => 'Determines the color mode of the CMS (light = normal, dark = dark mode)',
        ],
        [
            'key' => 'force_staff_2fa',
            'value' => '0',
            'comment' => 'If set to 1 every staff will be forced to apply 2FA before being able to visit any other page',
        ],
        [
            'key' => 'website_wordfilter_enabled',
            'value' => '1',
            'comment' => 'Determines whether the wordfilter on the CMS will be enabled or not',
        ],
        [
            'key' => 'requires_beta_code',
            'value' => '0',
            'comment' => 'Determines whether users need a beta code to register or not (0 for no & 1 for yes)',
        ],
        [
            'key' => 'disable_registration',
            'value' => '0',
            'comment' => 'Determines whether registration is enabled or not (0 for no & 1 for yes)',
        ],
        [
            'key' => 'give_hc_on_register',
            'value' => '0',
            'comment' => 'Determines whether the registered user will receive HC upon registration',
        ],
        [
            'key' => 'hc_on_register_duration',
            'value' => '315569260',
            'comment' => 'Specifies the amount of time a user receives their HC subscription for (The default amount is 10 years)',
        ],
        [
            'key' => 'max_comment_per_article',
            'value' => '2',
            'comment' => 'Specifies the amount of times a user can comment per article',
        ],
        [
            'key' => 'furniture_icons_path',
            'value' => '/client/flash/dcr/hof_furni/icons',
            'comment' => 'The path used to display furniture icons - eg. on rare values',
        ],
        [
            'key' => 'enable_caching',
            'value' => '0',
            'comment' => 'Determines whether the cache is enabled or not',
        ],
        [
            'key' => 'cache_timer',
            'value' => '30',
            'comment' => 'Determines how many minutes the cache will last before being refreshed ',
        ],
        [
            'key' => 'nitro_path',
            'value' => '/client/nitro/nitro-react/dist',
            'comment' => 'The path in which your index.html for nitro is located',
        ],
        [
            'key' => 'enable_discord_webhook',
            'value' => '0',
            'comment' => 'Specify whether Discord webhooks will be sent or not (0 for disabled, 1 for enabled)',
        ],
        [
            'key' => 'discord_webhook_url',
            'value' => '',
            'comment' => 'The URL provided by discord to send a webhook request',
        ],
        [
            'key' => 'max_guestbook_posts_per_profile',
            'value' => '3',
            'comment' => 'The amount of guestbook posts a user can post on each user profile',
        ],
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->longText('value');
            $table->string('comment');
        });

        foreach ($this->items as $item) {
            DB::table('website_settings')->insert($item);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('website_settings');
    }
};
