# moodle-theme-nsac

## Deployment

Update `version.php` as required.

```
$plugin->version = '2026042000';
$plugin->release = '0.0.1';
```

Copy to `/srv/www/moodle/public/theme/nsac`.

Update on the server:
- Navigate to Site administration, Notifications
- Check for available updates
- Continue
- You should see the NSAC theme requiring an update
- Upgrade Moodle database now
- Continue
- Navigate to Site administration, Appearance, Themes
- Clear theme caches