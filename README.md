# installation_scripts
DevOps Installation Scripts

## Zip without __MACOSX

```sh
zip -r "html_files.zip" "index.php" "info.php"  -x "*/\__MACOSX" -x "*/\.*"
```