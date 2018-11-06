# Isrg PHP API for Microsoft Azure Translate Text
Isrg PHP API for Microsoft Azure Translate Text is one of the easy to integerate PHP API with PHP web applications and other applications that support HTTP-call, cURL.

Features of Isrg PHP API for Microsoft Azure Translate Text
  - Easy to configure
  - Easy to deploy
  - Supports dynamic language

### Installation & configuration
- Download the Isrg PHP API for Microsoft Azure Translate Text
- Edit the `config-isrg.php` located in the `bing-translate-api` and replace the `ENTER_YOUR_TRANSLATE_TEXT_API_HERE` with your [Microsoft Azure Translate Text API](https://azure.microsoft.com/en-us/services/cognitive-services/translator-text-api/)
- Include the `lib-isrg.php` in your project using include PHP function.
 
### Using and calling API
offers two functions to translate the text
1. `isrg_auto_translate("text to translate");`
2. `isrg_translate($text_to_translate,$to_language,$from_language);`

# License
Apache License
