# installation_scripts
DevOps Installation Scripts

## Zip without __MACOSX

```sh
zip -r "html_files.zip" "index.php" "mycurlpolicy.pp"  -x "*/\__MACOSX" -x "*/\.*"
```