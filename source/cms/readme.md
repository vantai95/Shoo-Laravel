## API Request Header
This document is to provide the APIs documents for clients (webs or apps) to integrate with the booking server. In order to call the APIs, the request header must include below information:
- (required) **[CLI-HEADER](#)**: <b>"123456@IMT"</b> <i>(production server requires another value)</i>
- (optional) **[Authorization](#)** -  if user already logged in, then token should be not null. Must be add "Bearer " before token value.
- (optional) **[LANGUAGE](#)** - values: <b>"vi"</b> or <b>"en"</b>. If language value is null or other than "vi" and "en", then <b>"vi"</b> is selected by default.

<p align="center">
    <img src="https://seeklogo.com/images/V/Viettel_Corporation-logo-115843DDF8-seeklogo.com.png" style="height:30px; margin-right:40px;" />
    <img src="http://www.imt-soft.com//Cms_Data/Sites/IMT_Website/Themes/IMT_Theme/img/logo.png" style="height:55px;" />
</p>