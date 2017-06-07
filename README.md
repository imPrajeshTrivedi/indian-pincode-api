# indian-pincode-api
All India Pincode Directory

API of Postal Index Numbers (PIN) of India Post is a webservices providing access to metada of PIN code numbers of Post Offices in India. The API accepts HTTP GET/POST calls and returns JSON formatted responses. More than 900000 Pincode Information available , there can be multiple Json objects for single Pincode with different Postal Index address/location Information.

## Parameters:

- Pincode (*Number) — The 6 digts digits.
- Key (*String) - The Key of user.

## Returns:

- Village/Locality name (string) – name of village/city.
- Officename ( BO/SO/HO) (string) – name of office area of ( BO/SO/HO).
- Pincode (int) – offset this number of search code.
- Sub Distname (string) – name of sub District (default District name).
- Districtname (string) – name of District or location (default city name).
- StateName (string) – name of state.

For `YOURKEY Generation`
go to http://api.rbpt.tech/pincode
---

For more help on laying out the document or using the $pincode & $key variable see the example.php file!
