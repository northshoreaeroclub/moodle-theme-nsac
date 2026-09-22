# moodle-theme-nsac

## Deployment

Update `version.php` as required and commit.

```
$plugin->version = '2026042000';
$plugin->release = '0.0.1';
```

On the production server, navigate to `/srv/www/moodle/public/theme/nsac`.

Run `git pull`

This will automatically pull the latest version of the plugin, and clear theme caches via git hooks.

If the version or release has increased:

- Navigate to Site administration, Notifications
- Check for available updates
- Continue
- You should see the NSAC theme requiring an update
- Upgrade Moodle database now
- Continue
- Navigate to Site administration, Appearance, Themes
- Clear theme caches