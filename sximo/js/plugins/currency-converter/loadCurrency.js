function loadCurrency() {
                var cur_arr = [
                    {
                        "shortname": "EUR",
                        "longname": "Euro",
                        "users":  "Austria,Belgium,Cyprus,Finland,Helsinki,France,Paris,Germany,Berlin,Greece,Athens,Ireland,Dublin,Italy,Rome,Milan,Pisa,Luxembourg,Malta,Netherlands,Portugal,Slovenia,Spain,Madrid,Barcelona,Mayotte,Monaco,Saint Pierre and Miquelon,San Marino,Vatican City,Akrotiri and Dhekelia,Andorra,Kosovo,Montenegro,Saint-Martin,Crete,Rhodes,Corfu,Kefalonia,Cefalonia,Kos,Lefkas,Myonos,Santorini,Skiathos,Zante,Zakynthos,Aegina,Andros,Ios,Kalymnos,Lesvos,Naxos,Paros,Samos,Thassos,Alonissos,Leros,Lipsi,Patmos,Paxos,Skopelos,Symi,Angistri,Hydra,Ikaria,Ithaca,Skyros,La Palma,Tenerife,Lanzarote,Fuerteventure,Grand Canaria,Mallorca,Menorca,Minorca,Ibiza",
                        "alternatives": "ewro,evro",
                        "symbol": "€",
                        "highlight": "1"
                    },
                    {
                        "shortname": "GBP",
                        "longname": "British Pound",
                        "users":  "United Kingdom,UK,England,Britain,Great Britain,Northern Ireland,Wales,Scotland,UK,Isle of Man,Jersey,Guernsey,Tristan da Cunha,South Georgia and the South Sandwich Islands",
                        "alternatives": "Quid,Pound Sterling,Sterling,London,Cardiff,Edinburgh,Belfast",
                        "symbol": "£",
                        "highlight": "1"
                    },
                    {
                        "shortname": "USD",
                        "longname": "United States Dollar",
                        "users":  "United States of America,East Timor,British Virgin Islands (U.K.),Ecuador,El Salvador,Marshall Islands,Federated States of Micronesia,Palau,Panama,Turks and Caicos Islands (U.K.),Bermuda,US,USA,America,Alabama,Montgomery,Alaska,Juneau,Arizona,Phoenix,Arkansas,Little Rock,California,Sacramento,Colorado,Denver,Connecticut,Hartford,Delaware,Dover,Florida,Tallahassee,Georgia,Atlanta,Hawaii,Honolulu,Idaho,Boise,Indiana,Indianapolis,Iowa,Des Moines,Kansas,Topeka,Kentucky,Frankfort,Louisiana,Baton Rouge,Maine,Augusta,Maryland,Annapolis,Massachusetts,Boston,Michigan,Lansing,Minnesota,Saint Paul,Mississippi,Jackson,Missouri,Jefferson City,Montana,Helena,Nebraska,Lincoln,Nevada,Carson City,New Hampshire,Concord,New Jersey,Trenton,New Mexico,Santa Fe,New York,Albany (New York),North Carolina,Raleigh,North Dakota,Bismarck,Ohio,Columbus,Oklahoma,Oklahoma City,Oregon,Salem,Pennsylvania,Harrisburg,Rhode Island,Providence,South Carolina,Columbia,South Dakota,Pierre,Tennessee,Nashville,Texas,Austin,Utah,Salt Lake City,Vermont,Montpelier,Virginia,Richmond,Washington,Olympia,West Virginia,Charleston,Wisconsin,Madison,Wyoming,Cheyenne,Los Angeles",
                        "alternatives": "Buck,Green,Greenback",
                        "symbol": "$",
                        "highlight": "1"
                    },
                    {
                        "shortname": "AUD",
                        "longname": "Australian Dollar",
                        "users":  "Australia,Sydney,Melbourne,Perth,Kiribati,Nauru,Tuvalu,Christmas Island,Cocos (Keeling) Islands,Norfolk Island",
                        "alternatives": "",
                        "symbol": "$",
                        "highlight": "1"
                    },
                    {
                        "shortname": "CAD",
                        "longname": "Canadian Dollar",
                        "users":  "Canada",
                        "alternatives": "loonie,buck,huard,piastre",
                        "symbol": "C$",
                        "highlight": "1"
                    },
                    {
                        "shortname": "CHF",
                        "longname": "Swiss Franc",
                        "users":  "Switzerland,Liechtenstein",
                        "alternatives": "Schweizer Franken,franc suisse,franco svizzero franc svizzer",
                        "symbol": "CHF",        
                        "highlight": ""
                    },
                    {
                        "shortname": "CNY",
                        "longname": "Chinese Yuan",
                        "users":  "China,Hong Kong,Macau,Shanghai,Beijing,Tianjin,Guangzhou,Wuhan,Chongqing,Shenyang,Yuan",
                        "alternatives": "jiao",
                        "symbol": "¥",        
                        "highlight": ""
                    },
                    {
                        "shortname": "HKD",
                        "longname": "Hong Kong Dollar",
                        "users":  "China,Hong Kong,Macau",
                        "alternatives": "",
                        "symbol": "HK$",
                    "highlight": ""        
                    },
                    {
                        "shortname": "IDR",
                        "longname": "Indonesian Rupiah",
                        "users":  "Indonesia,Jakarta",
                        "alternatives": "",
                        "symbol": "Rp"        
                    },
                    {
                        "shortname": "INR",
                        "longname": "Indian Rupee",
                        "users":  "Bhutan,India,Bangalore,Mumbai,Delhi,Kolkata,Chennai,Hyderabad,Ahmedabad",
                        "alternatives": "roopayi,rupaye,rubai",
                        "symbol": "Rs."        
                    },
                    {
                        "shortname": "JPY",
                        "longname": "Japanese Yen",
                        "users":  "Japan,Tokyo,Yokohama,Nihon-koku,日本",
                        "alternatives": "A.U.U.",
                        "symbol": "¥",
                        "highlight": "1"
                    },
                    {
                        "shortname": "THB",
                        "longname": "Thai Baht",
                        "users":  "Thailand,Bangkok",
                        "alternatives": "baht",
                        "symbol": "฿" ,        
                        "highlight": ""
                    },
                    {
                        "shortname":"ALL",
                        "longname": "Albanian Lek",
                        "users":  "Albania,Tirana,Republic of Albania,Republika e Shqipris",
                        "alternatives": "",
                        "symbol": "ALL"       
                    },
                    {
                        "shortname": "DZD",
                        "longname": "Algerian Dinar",
                        "users":  "Algeria,Algiers,People's Democratic Republic of Algeria,République algérienne démocratique et populaire,ad-Dīmuqrāţiyya ash Sha'biyya,al Jumhuriyya al Jazā'iriyya",
                        "alternatives": "",
                        "symbol": "دج"       
                    },
                    {
                        "shortname": "XAL",
                        "longname": "Aluminium Ounces",
                        "users": "",
                        "alternatives": "",
                        "symbol": ""       
                    },
                    {
                        "shortname": "ARS",
                        "longname": "Argentine Peso",
                        "users":  "Argentina,Buenos Aires,Argentine Republic,Repblica Argentina",
                        "alternatives": "",
                        "symbol": "$"       
                    },
                    {
                        "shortname": "AWG",
                        "longname": "Aruba Florin",
                        "users":  "Aruba,Oranjestad",
                        "alternatives": "",
                        "symbol": "ƒ"       
                    },
                    {
                        "shortname": "BSD",
                        "longname": "Bahamian Dollar",
                        "users":  "Bahamas,The Bahamas,The Commonwealth of The Bahamas",
                        "alternatives": "",
                        "symbol": "B$"       
                    },
                    {
                        "shortname": "BHD",
                        "longname": "Bahraini Dinar",
                        "users":  "Bahrain,Manama,Kingdom of Bahrain",
                        "alternatives": "",
                        "symbol": ".د.ب"       
                    },
                    {
                        "shortname": "BDT",
                        "longname": "Bangladesh Taka",
                        "users":  "Bangladesh,Dhaka,People's Republic of Bangladesh,Go.noprojatontri Bangladesh",
                        "alternatives": "",
                        "symbol": "Tk"       
                    },
                    {
                        "shortname": "BBD",
                        "longname": "Barbados Dollar",
                        "users":  "Barbados,Bridgetown",
                        "alternatives": "",
                        "symbol": "BBD"       
                    },
                    {
                        "shortname": "BYR",
                        "longname": "Belarus Ruble",
                        "users":  "Belarus,Minsk,Republic of Belarus",
                        "alternatives": "",
                        "symbol": "Br"       
                    },
                    {
                        "shortname": "BZD",
                        "longname": "Belize Dollar",
                        "users":  "Belize,Belmopan",
                        "alternatives": "",
                        "symbol": "BZ$"       
                    },
                    {
                        "shortname": "BMD",
                        "longname": "Bermuda Dollar",
                        "users":  "Bermuda,Hamilton",
                        "alternatives": "",
                        "symbol": "BD$"       
                    },
                    {
                        "shortname": "BTN",
                        "longname": "Bhutan Ngultrum",
                        "users":  "Bhutan,Thimphu,Kingdom of Bhutan,Dru Gäkhap,Brug rGyal-Khab",
                        "alternatives": "",
                        "symbol": "Nu."       
                    },
                    {
                        "shortname": "BOB",
                        "longname": "Bolivian Boliviano",
                        "users":  "Bolivia,Sucre",
                        "alternatives": "",
                        "symbol": "Bs"       
                    },
                    {
                        "shortname": "BWP",
                        "longname": "Botswana Pula",
                        "users":  "Botswana,Gaborone",
                        "alternatives": "",
                        "symbol": "P"       
                    },
                    {
                        "shortname": "BRL",
                        "longname": "Brazilian Real",
                        "users":  "Brazil,Rio de Janeiro,São Paulo,Sao Paulo,Federative Republic of Brazil,Republica Federativa do Brasil",
                        "alternatives": "",
                        "symbol": "R$"       
                    },
                    {
                        "shortname": "BND",
                        "longname": "Brunei Dollar",
                        "users":  "Brunei,Bandar Seri Begawan,Singapore,State of Brunei,Abode of Peace,Negara Brunei Darussalam",
                        "alternatives": "",
                        "symbol": "B$"       
                    },
                    {
                        "shortname": "BGN",
                        "longname": "Bulgarian Lev",
                        "users":  "Bulgaria,Sofia,Republic of Bulgaria,Republika Balgariya",
                        "alternatives": "",
                        "symbol": "лв"       
                    },
                    {
                        "shortname": "BIF",
                        "longname": "Burundi Franc",
                        "users":  "Burundi,Bujumbura,Republic of Burundi,République du Burundi,Republika y'u Burundi",
                        "alternatives": "",
                        "symbol": "FBu"       
                    },
                    {
                        "shortname": "KHR",
                        "longname": "Cambodia Riel",
                        "users":  "Cambodia,Phnom Penh,Kingdom of Cambodia,Royaume du Cambodge,Preăh Réachéa Nachâk Kâmpŭchéa",
                        "alternatives": "",
                        "symbol": "៛"       
                    },
                    {
                        "shortname": "CVE",
                        "longname": "Cape Verde Escudo",
                        "users":  "Cape Verde,Praia,Republic of Cape Verde,Republica de Cabo Verde",
                        "alternatives": "",
                        "symbol": "Esc"       
                    },
                    {
                        "shortname": "KYD",
                        "longname": "Cayman Islands Dollar",
                        "users":  "Cayman Islands,Grand Cayman,Cayman Brac,Little Cayman,George Town",
                        "alternatives": "",
                        "symbol": "$"       
                    },
                    {
                        "shortname": "XOF",
                        "longname": "CFA Franc (BCEAO)",
                        "users":  "Côte d'Ivoire,Yamoussoukro,Abidjan,Republic of Côte d'Ivoire,Ivory Coast,Benin,Burkina Faso,Guinea-Bissau,Mali,Niger,Senegal,Togo",
                        "alternatives": "cefa,franc,West African CFA franc",
                        "symbol": "XOF"       
                    },
                    {
                        "shortname": "XAF",
                        "longname": "CFA Franc (BEAC)",
                        "users":  "Cameroon,Central African Republic,Chad,Republic of the Congo,Equatorial Guinea,Gabon",
                        "alternatives": "cefa,franc,Central African CFA franc",
                        "symbol": "XAF"       
                    },
                    {
                        "shortname": "CLP",
                        "longname": "Chilean Peso",
                        "users":  "Chile,Santiago",
                        "alternatives": "",
                        "symbol": "$"       
                    },
                    {
                        "shortname": "COP",
                        "longname": "Colombian Peso",
                        "users":  "Columbia,Bogota,Republica de Colombia,Republic of Colombia",
                        "alternatives": "",
                        "symbol": "$"       
                    },
                    {
                        "shortname": "KMF",
                        "longname": "Comoros Franc",
                        "users":  "Comoros,Union des Comores,Udzima wa Komorid, Al-Qumuriyy,Union of the Comoros,Moroni",
                        "alternatives": "Comorian franc",
                        "symbol": "KMF"       
                    },
                    {
                        "shortname": "XCP",
                        "longname": "Copper Pounds",
                        "users": "",
                        "alternatives": "",
                        "symbol": ""       
                    },
                    {
                        "shortname": "CRC",
                        "longname": "Costa Rica Colon",
                        "users":  "Costa Rica,San Jose,San Jose,Republica de Costa Rica,Republic of Costa Rica",
                        "alternatives": "",
                        "symbol": "₡"       
                    },
                    {
                        "shortname": "HRK",
                        "longname": "Croatian Kuna",
                        "users":  "Croatia,Zagreb,Republika Hrvatska,Republic of Croatia",
                        "alternatives": "",
                        "symbol": "kn"       
                    },
                    {
                        "shortname": "CUP",
                        "longname": "Cuban Peso",
                        "users":  "Cuba,Havana,Republica de Cuba,Republic of Cuba",
                        "alternatives": "",
                        "symbol": "$MN"       
                    },
                    {
                        "shortname": "CZK",
                        "longname": "Czech Koruna",
                        "users":  "Czech Republic,Prague",
                        "alternatives": "CSK",
                        "symbol": "Kč"       
                    },
                    {
                        "shortname": "DKK",
                        "longname": "Danish Krone",
                        "users":  "Denmark,Copenhagen,Greenland,Faroe Islands",
                        "alternatives": "DKR",
                        "symbol": "kr"       
                    },
                    {
                        "shortname": "DJF",
                        "longname": "Dijibouti Franc",
                        "users":  "Djibouti,Republic of Djibouti,République de Djibouti,Jamhuuriyadda Jabuuti,Jumhūriyyat Jībūtī",
                        "alternatives": "",
                        "symbol": "Fdj"       
                    },
                    {
                        "shortname": "DOP",
                        "longname": "Dominican Peso",
                        "users":  "Dominican Republic,Republica Dominicana,Hispaniola,Greater Antilles",
                        "alternatives": "",
                        "symbol": "RD$"       
                    },
                    {
                        "shortname": "XCD",
                        "longname": "East Caribbean Dollar",
                        "users":  "Anguilla,Antigua and Barbuda,Dominica,Grenada,Montserrat,Saint Kitts and Nevis,Saint Lucia,Saint Vincent,The Grenadines",
                        "alternatives": "",
                        "symbol": "EC$"       
                    },
                    {
                        "shortname": "ECS",
                        "longname": "Ecuador Sucre",
                        "users":  "Ecuador,Quito,Republica del Ecuador,Galapagos Islands,Guayaquil",
                        "alternatives": "",
                        "symbol": "S/."       
                    },
                    {
                        "shortname": "EGP",
                        "longname": "Egyptian Pound",
                        "users":  "Egypt,Cairo,Alexandria,Arab Republic of Egypt",
                        "alternatives": "",
                        "symbol": "ج.م"       
                    },
                    {
                        "shortname": "SVC",
                        "longname": "El Salvador Colon",
                        "users":  "El Salvador,San Salvador,Republica de El Salvador",
                        "alternatives": "",
                        "symbol": "₡"       
                    },
                    {
                        "shortname": "ERN",
                        "longname": "Eritrea Nakfa",
                        "users":  "Eritrea,Asmara,State of Eritrea",
                        "alternatives": "",
                        "symbol": "Nfk"       
                    },
                    {
                        "shortname": "EEK",
                        "longname": "Estonian Kroon",
                        "users":  "Estonia,Republic of Estonia,Tallinn,Eesti,Eesti Vabariik",
                        "alternatives": "",
                        "symbol": "EEK"       
                    },
                    {
                        "shortname": "ETB",
                        "longname": "Ethiopian Birr",
                        "users":  "Ethiopia,Addis Ababa,Federal Democratic Republic of Ethiopia",
                        "alternatives": "",
                        "symbol": "Br"       
                    },
                    {
                        "shortname": "FKP",
                        "longname": "Falkland Islands Pound",
                        "users":  "Falkland Islands,Malvinas,Islas Malvinas,Stanley",
                        "alternatives": "",
                        "symbol": "£"       
                    },
                    {
                        "shortname": "FJD",
                        "longname": "Fiji Dollar",
                        "users":  "Fiji,Republic of the Fiji Islands,Suva",
                        "alternatives": "",
                        "symbol": "FJ$"       
                    },
                    {
                        "shortname": "GMD",
                        "longname": "Gambian Dalasi",
                        "users":  "The Gambia,Gambia,Banjul,Republic of The Gambia",
                        "alternatives": "",
                        "symbol": "D"       
                    },
                    {
                        "shortname": "GHC",
                        "longname": "Ghanian Cedi",
                        "users":  "Ghana,Republic of Ghana,Accra",
                        "alternatives": "DKR",
                        "symbol": "₵"       
                    },
                    {
                        "shortname": "GIP",
                        "longname": "Gibraltar Pound",
                        "users":  "Gibraltar,Gib,The Rock",
                        "alternatives": "",
                        "symbol": "£"       
                    },
                    {
                        "shortname": "XAU",
                        "longname": "Gold Ounces",
                        "users": "",
                        "alternatives": "",
                        "symbol": ""       
                    },
                    {
                        "shortname": "GTQ",
                        "longname": "Guatemala Quetzal",
                        "users":  "Guatemala,Guatemala City,Republica de Guatemala",
                        "alternatives": "",
                        "symbol": "Q"       
                    },
                    {
                        "shortname": "GNF",
                        "longname": "Guinea Franc",
                        "users":  "Guinea,Conakry,Republic of Guinea,République de Guinée",
                        "alternatives": "",
                        "symbol": "FG"       
                    },
                    {
                        "shortname": "GYD",
                        "longname": "Guyana Dollar",
                        "users":  "Guyana,Co-operative Republic of Guyana,Georgetown",
                        "alternatives": "",
                        "symbol": "GY$"       
                    },
                    {
                        "shortname": "HTG",
                        "longname": "Haiti Gourde",
                        "users": "",
                        "alternatives": "",
                        "symbol": ""       
                    },
                    {
                        "shortname": "HNL",
                        "longname": "Honduras Lempira",
                        "users":  "Honduras,Tegucigalpa,Republica de Honduras,Republic of Honduras",
                        "alternatives": "",
                        "symbol": "L"       
                    },
                    {
                        "shortname": "HUF",
                        "longname": "Hungarian Forint",
                        "users":  "Hungary,Budapest,Magyar Köztársaság,Republic of Hungary",
                        "alternatives": "",
                        "symbol": "Ft"       
                    },
                    {
                        "shortname": "ISK",
                        "longname": "Iceland Krona",
                        "users":  "Iceland,Reykjavik,Ísland,Republic of Iceland",
                        "alternatives": "",
                        "symbol": "kr"       
                    },
                    {
                        "shortname": "IRR",
                        "longname": "Iran Rial",
                        "users":  "Iran,Tehran,Islamic Republic of Iran,Jomhuri-ye Eslāmi-ye Irān",
                        "alternatives": "",
                        "symbol": "﷼"       
                    },
                    {
                        "shortname": "IQD",
                        "longname": "Iraqi Dinar",
                        "users":  "Iraq,Baghdad,Republic of Iraq,Komara Îraqê,Jumhūriyat Al-Irāq",
                        "alternatives": "",
                        "symbol": "ع.د"       
                    },
                    {
                        "shortname": "ILS",
                        "longname": "Israeli Shekel",
                        "users":  "Israel,Palestinian territories,The West Bank,Gaza Strip,Jerusalem",
                        "alternatives": "",
                        "symbol": "₪"       
                    },
                    {
                        "shortname": "JMD",
                        "longname": "Jamaican Dollar",
                        "users":  "Jamaica,Kingston",
                        "alternatives": "",
                        "symbol": "$"       
                    },
                    {
                        "shortname": "JOD",
                        "longname": "Jordanian Dinar",
                        "users":  "Jordan,West Bank,Al-Mamlakah al-Urdunniyyah al-Hāšimiyyah,The Hashemite Kingdom of Jordan,Amman",
                        "alternatives": "",
                        "symbol": "JOD"       
                    },
                    {
                        "shortname": "KZT",
                        "longname": "Kazakhstan Tenge",
                        "users":  "Kazakhstan,Republic of Kazakhstan,Qazaqstan Respublïkası,Astana",
                        "alternatives": "",
                        "symbol": "KZT"       
                    },
                    {
                        "shortname": "KES",
                        "longname": "Kenyan Shilling",
                        "users":  "Kenya,Nairobi,Jamhuri ya Kenya,Republic of Kenya",
                        "alternatives": "",
                        "symbol": "KSh"       
                    },
                    {
                        "shortname": "KRW",
                        "longname": "South Korean Won",
                        "users":  "South Korea,Daehanminguk,Republic of Korea,Seoul",
                        "alternatives": "",
                        "symbol": "₩",
                        "highlight": ""
                    },
                    {
                        "shortname": "KWD",
                        "longname": "Kuwaiti Dinar",
                        "users":  "Kuwait,Dawlat al-Kuwayt,State of Kuwait",
                        "alternatives": "",
                        "symbol": "د.ك"       
                    },
                    {
                        "shortname": "LAK",
                        "longname": "Lao Kip",
                        "users":  "Laos,Lao People's Democratic Republic,Sathalanalat Paxathipatai Paxaxon Lao,Vientiane",
                        "alternatives": "",
                        "symbol": "₭"       
                    },
                    {
                        "shortname": "LVL",
                        "longname": "Latvian Lat",
                        "users":  "Latvia,Republic of Latvia,Latvijas Republika",
                        "alternatives": "",
                        "symbol": "Ls"       
                    },
                    {
                        "shortname": "LBP",
                        "longname": "Lebanese Pound",
                        "users":  "Lebanon,Lebanese Republic,al-Jumhūrīyah al-Lubnānīyah,Beirut",
                        "alternatives": "",
                        "symbol": "ل.ل"       
                    },
                    {
                        "shortname": "LSL",
                        "longname": "Lesotho Loti",
                        "users":  "Lesotho,Kingdom of Lesotho,Muso oa Lesotho,Maseru",
                        "alternatives": "",
                        "symbol": "L"       
                    },
                    {
                        "shortname": "LRD",
                        "longname": "Liberian Dollar",
                        "users":  "Liberia,Republic of Liberia,Monrovia",
                        "alternatives": "",
                        "symbol": "L$"       
                    },
                    {
                        "shortname": "LYD",
                        "longname": "Libyan Dinar",
                        "users":  "Libya,Great Socialist People's Libyan Arab Republic",
                        "alternatives": "",
                        "symbol": "ل.د"       
                    },
                    {
                        "shortname": "LTL",
                        "longname": "Lithuanian Lita",
                        "users":  "Lithuania,Lietuvos Respublika,Republic of Lithuania",
                        "alternatives": "",
                        "symbol": "Lt"       
                    },
                    {
                        "shortname": "MOP",
                        "longname": "Macau Pataca",
                        "users":  "Macau,Macau Special Administrative Region,Região Administrativa Especial de Macau",
                        "alternatives": "",
                        "symbol": "$"       
                    },
                    {
                        "shortname": "MKD",
                        "longname": "Macedonian Denar",
                        "users":  "Republic of Macedonia,Macedonia,Republika Makedonija",
                        "alternatives": "",
                        "symbol": "MKD"       
                    },
                    {
                        "shortname": "MWK",
                        "longname": "Malawi Kwacha",
                        "users":  "Malawi,Lilongwe",
                        "alternatives": "",
                        "symbol": "MK"       
                    },
                    {
                        "shortname": "MYR",
                        "longname": "Malaysian Ringgit",
                        "users":  "Malaysia,Kuala Lumpur",
                        "alternatives": "",
                        "symbol": "RM"       
                    },
                    {
                        "shortname": "MVR",
                        "longname": "Maldives Rufiyaa",
                        "users":  "Maldives,Male,Divehi Rājjey ge Jumhuriyyā,Republic of Maldives",
                        "alternatives": "",
                        "symbol": "Rf"       
                    },
                    {
                        "shortname": "MTL",
                        "longname": "Maltese Lira",
                        "users":  "Malta,Repubblika ta' Malta,Republic of Malta,Valletta,Birkirkara",
                        "alternatives": "",
                        "symbol": "Lm"       
                    },
                    {
                        "shortname": "MRO",
                        "longname": "Mauritania Ougulya",
                        "users":  "Mauritania,Al-Jumhūriyyah al-Islāmiyyah al-Mūrītāniyyah,République Islamique de Mauritanie,Islamic Republic of Mauritania,Nouakchott",
                        "alternatives": "",
                        "symbol": "UM"       
                    },
                    {
                        "shortname": "MUR",
                        "longname": "Mauritius Rupee",
                        "users":  "Mauritius,Port Louis,Republic of Mauritius,République de Maurice",
                        "alternatives": "",
                        "symbol": "₨"       
                    },
                    {
                        "shortname": "MXN",
                        "longname": "Mexican Peso",
                        "users":  "Mexico,Mexico City",
                        "alternatives": "",
                        "symbol": "$"       
                    },
                    {
                        "shortname": "MDL",
                        "longname": "Moldovan Leu",
                        "users":  "Moldova,Republica Moldova,Republic of Moldova,Chisinau",
                        "alternatives": "",
                        "symbol": "MDL"       
                    },
                    {
                        "shortname": "MNT",
                        "longname": "Mongolian Tugrik",
                        "users":  "Mongolia,Mongol uls,Ulan Bator",
                        "alternatives": "",
                        "symbol": "₮"       
                    },
                    {
                        "shortname": "MAD",
                        "longname": "Moroccan Dirham",
                        "users":  "Morocco,Western Sahara,Al-Mamlaka al-Maghribiyya,Kingdom of Morocco,Rabat,al-Harbiyyah,Sahara Occidental,Western Sahara,El Aaiun,Laayoune",
                        "alternatives": "",
                        "symbol": "د.م."       
                    },
                    {
                        "shortname": "MMK",
                        "longname": "Myanmar Kyat",
                        "users":  "Burma,Naypyidaw,Union of Myanmar,Pyi-daung-zu Myan-ma Naing-ngan-daw",
                        "alternatives": "",
                        "symbol": "K"       
                    },
                    {
                        "shortname": "NAD",
                        "longname": "Namibian Dollar",
                        "users":  "Namibia,Republic of Namibia,Windhoek",
                        "alternatives": "",
                        "symbol": "N$"       
                    },
                    {
                        "shortname": "NPR",
                        "longname": "Nepalese Rupee",
                        "users":  "Nepal,Kathmandu,Sanghiya Loktāntrik Ganatantra Nepāl,Federal Democratic Republic of Nepal",
                        "alternatives": "",
                        "symbol": "₨"       
                    },
                    {
                        "shortname": "ANG",
                        "longname": "Neth Antilles Guilder",
                        "users":  "Netherlands Antilles,Willemstad,Nederlandse Antillen,Antia Ulandes,Antia Hulandes",
                        "alternatives": "",
                        "symbol": "NAƒ"       
                    },
                    {
                        "shortname": "TRY",
                        "longname": "Turkish Lira",
                        "users":  "Turkey,Istanbul,Ankara,Northern Cyprus,Türkiye Cumhuriyeti,Turkish Republic of Northern Cyprus,Nicosia,Lefkosa",
                        "alternatives": "",
                        "symbol": "YTL"       
                    },
                    {
                        "shortname": "NZD",
                        "longname": "New Zealand Dollar",
                        "users":  "New Zealand,Wellington",
                        "alternatives": "",
                        "symbol": "$" ,      
                        "highlight": ""
                    },
                    {
                        "shortname": "NIO",
                        "longname": "Nicaragua Cordoba",
                        "users":  "Nicaragua,Managua,Republica de Nicaragua,Republic of Nicaragua",
                        "alternatives": "",
                        "symbol": "C$"       
                    },
                    {
                        "shortname": "NGN",
                        "longname": "Nigerian Naira",
                        "users":  "Nigeria,Lagos",
                        "alternatives": "",
                        "symbol": "₦"       
                    },
                    {
                        "shortname": "KPW",
                        "longname": "North Korean Won",
                        "users":  "North Korea,Pyongyang",
                        "alternatives": "",
                        "symbol": "₩"       
                    },
                    {
                        "shortname": "NOK",
                        "longname": "Norwegian Krone",
                        "users":  "Norway,Oslo",
                        "alternatives": "",
                        "symbol": "kr"       
                    },
                    {
                        "shortname": "OMR",
                        "longname": "Omani Rial",
                        "users":  "Oman,Muscat",
                        "alternatives": "",
                        "symbol": "ر.ع."       
                    },
                    {
                        "shortname": "XPF",
                        "longname": "Pacific Franc",
                        "users":  "French Polynesia,New Caledonia,Wallis and Futuna",
                        "alternatives": "",
                        "symbol": "F"       
                    },
                    {
                        "shortname": "PKR",
                        "longname": "Pakistani Rupee",
                        "users":  "Pakistan,Islamabad,Karachi,Lahore",
                        "alternatives": "",
                        "symbol": "Rs."       
                    },
                    {
                        "shortname": "XPD",
                        "longname": "Palladium Ounces",
                        "users": "",
                        "alternatives": "",
                        "symbol": ""       
                    },
                    {
                        "shortname": "PAB",
                        "longname": "Panama Balboa",
                        "users":  "Panama,Panama City,Republica de Panama,Republic of Panama",
                        "alternatives": "",
                        "symbol": "B"       
                    },
                    {
                        "shortname": "PGK",
                        "longname": "Papua New Guinea Kina",
                        "users":  "Papua New Guinea,Port Moresby",
                        "alternatives": "",
                        "symbol": "K"       
                    },
                    {
                        "shortname": "PYG",
                        "longname": "Paraguayan Guarani",
                        "users":  "Paraguay,Asuncion",
                        "alternatives": "",
                        "symbol": "₲"       
                    },
                    {
                        "shortname": "PEN",
                        "longname": "Peruvian Nuevo Sol",
                        "users":  "Peru,Lima",
                        "alternatives": "",
                        "symbol": "S/."       
                    },
                    {
                        "shortname": "PHP",
                        "longname": "Philippine Peso",
                        "users":  "Philippines,Manila",
                        "alternatives": "",
                        "symbol": "₱"       
                    },
                    {
                        "shortname": "XPT",
                        "longname": "Platinum Ounces",
                        "users": "",
                        "alternatives": "",
                        "symbol": ""       
                    },
                    {
                        "shortname": "PLN",
                        "longname": "Polish Zloty",
                        "users":  "Poland,Warsaw,Republic of Poland",
                        "alternatives": "z.oty",
                        "symbol": "zł"       
                    },
                    {
                        "shortname": "QAR",
                        "longname": "Qatar Rial",
                        "users":  "Qatar,Doha,State of Qatar",
                        "alternatives": "Qatari riyal",
                        "symbol": "ر.ق"       
                    },
                    {
                        "shortname": "RON",
                        "longname": "Romanian New Leu",
                        "users":  "Romania,Bucharest",
                        "alternatives": "",
                        "symbol": "L"       
                    },
                    {
                        "shortname": "RUB",
                        "longname": "Russian Rouble",
                        "users":  "Russia,Moscow,Saint Petersburg,St Petersburg",
                        "alternatives": "",
                        "symbol": "руб"       
                    },
                    {
                        "shortname": "RWF",
                        "longname": "Rwanda Franc",
                        "users":  "Rwanda,Kigali,Repubulika y'u Rwanda,République du Rwanda",
                        "alternatives": "",
                        "symbol": "RF"       
                    },
                    {
                        "shortname": "WST",
                        "longname": "Samoa Tala",
                        "users":  "Samoa,Apia",
                        "alternatives": "",
                        "symbol": "WS$"       
                    },
                    {
                        "shortname": "STD",
                        "longname": "Sao Tome Dobra",
                        "users":  "Sao Tome,São Tomé,Principe",
                        "alternatives": "",
                        "symbol": "Db"       
                    },
                    {
                        "shortname": "SAR",
                        "longname": "Saudi Arabian Riyal",
                        "users":  "Saudi Arabia,Riyadh",
                        "alternatives": "",
                        "symbol": "ر.س"       
                    },
                    {
                        "shortname": "SCR",
                        "longname": "Seychelles Rupee",
                        "users":  "Seychelles,Victoria,Republic of Seychelles",
                        "alternatives": "",
                        "symbol": "SR"       
                    },
                    {
                        "shortname": "SLL",
                        "longname": "Sierra Leone Leone",
                        "users":  "Sierra Leone,Freetown",
                        "alternatives": "",
                        "symbol": "Le"       
                    },
                    {
                        "shortname": "XAG",
                        "longname": "Silver Ounces",
                        "users": "",
                        "alternatives": "",
                        "symbol": ""       
                    },
                    {
                        "shortname": "SGD",
                        "longname": "Singapore Dollar",
                        "users":  "Singapore",
                        "alternatives": "",
                        "symbol": "S$",
                    "highlight": ""       
                    },
                    {
                        "shortname": "SKK",
                        "longname": "Slovak Koruna",
                        "users":  "Slovakia,Bratislava",
                        "alternatives": "",
                        "symbol": "Sk"       
                    },
                    {
                        "shortname": "SIT",
                        "longname": "Slovenian Tolar",
                        "users":  "Slovenia,Ljubljana",
                        "alternatives": "",
                        "symbol": "SIT"       
                    },
                    {
                        "shortname": "SBD",
                        "longname": "Solomon Islands Dollar",
                        "users":  "Solomon Islands,Honiara",
                        "alternatives": "",
                        "symbol": "SI$"       
                    },
                    {
                        "shortname": "SOS",
                        "longname": "Somali Shilling",
                        "users":  "Somalia,Mogadishu",
                        "alternatives": "",
                        "symbol": "So."       
                    },
                    {
                        "shortname": "ZAR",
                        "longname": "South African Rand",
                        "users":  "South Africa,Republic of South Africa,Pretoria,Bloemfontein,Cape Town,Johannesburg",
                        "alternatives": "",
                        "symbol": "R"       
                    },
                    {
                        "shortname": "LKR",
                        "longname": "Sri Lanka Rupee",
                        "users":  "Sri Lanka,Sri Jayawardenapura-Kotte",
                        "alternatives": "",
                        "symbol": "₨"       
                    },
                    {
                        "shortname": "SHP",
                        "longname": "St Helena Pound",
                        "users":  "St Helena,Jamestown",
                        "alternatives": "",
                        "symbol": "£"       
                    },
                    {
                        "shortname": "SDG",
                        "longname": "Sudanese Pound",
                        "users":  "Sudan",
                        "alternatives": "",
                        "symbol": "SDG"       
                    },
                    {
                        "shortname": "SZL",
                        "longname": "Swaziland Lilageni",
                        "users":  "Swaziland",
                        "alternatives": "",
                        "symbol": "SZL"       
                    },
                    {
                        "shortname": "SEK",
                        "longname": "Swedish Krona",
                        "users":  "Sweden,Stockholm",
                        "alternatives": "",
                        "symbol": "kr"       
                    },
                    {
                        "shortname": "SYP",
                        "longname": "Syrian Pound",
                        "users":  "Syria",
                        "alternatives": "",
                        "symbol": "SYP"       
                    },
                    {
                        "shortname": "TWD",
                        "longname": "Taiwan Dollar",
                        "users":  "Taiwan,Taipei",
                        "alternatives": "",
                        "symbol": "NT$",       
                        "highlight": ""
                    },
                    {
                        "shortname": "TZS",
                        "longname": "Tanzanian Shilling",
                        "users":  "Tanzania",
                        "alternatives": "",
                        "symbol": "x"       
                    },
                    {
                        "shortname": "TOP",
                        "longname": "Tonga Pa'ang",
                        "users":  "Tonga",
                        "alternatives": "",
                        "symbol": "T$"       
                    },
                    {
                        "shortname": "TTD",
                        "longname": "Trinidad & Tobago Dollar",
                        "users":  "Trinidad and Tobago,Trinidad,Tobago,Port of Spain",
                        "alternatives": "TT$",
                        "symbol": ""       
                    },
                    {
                        "shortname": "TND",
                        "longname": "Tunisian Dinar",
                        "users":  "Tunisia,Tunis",
                        "alternatives": "",
                        "symbol": "د.ت"       
                    },
                    {
                        "shortname": "AED",
                        "longname": "UAE Dirham",
                        "users":  "United Arab Emirates,UAE,Dubai",
                        "alternatives": "",
                        "symbol": "د.إ"       
                    },
                    {
                        "shortname": "UGX",
                        "longname": "Ugandan Shilling",
                        "users":  "Uganda,Kampala",
                        "alternatives": "",
                        "symbol": "USh"       
                    },
                    {
                        "shortname": "UAH",
                        "longname": "Ukraine Hryvnia",
                        "users":  "Ukraine",
                        "alternatives": "",
                        "symbol": "₴"       
                    },
                    {
                        "shortname": "UYU",
                        "longname": "Uruguayan New Peso",
                        "users":  "Uruguay",
                        "alternatives": "$",
                        "symbol": ""       
                    },
                    {
                        "shortname": "VUV",
                        "longname": "Vanuatu Vatu",
                        "users":  "Vanuatu,Port Vila",
                        "alternatives": "Vt",
                        "symbol": "Vt"       
                    },
                    {
                        "shortname": "VEF",
                        "longname": "Venezuelan Bolivar Fuerte",
                        "users":  "Venezuela",
                        "alternatives": "",
                        "symbol": "Bs"       
                    },
                    {
                        "shortname": "VND",
                        "longname": "Vietnam Dong",
                        "users":  "Vietnam,Ho Chi Minh City",
                        "alternatives": "",
                        "symbol": "₫"       
                    },
                    {
                        "shortname": "YER",
                        "longname": "Yemen Riyal",
                        "users":  "Yemen",
                        "alternatives": "Yemeni rial",
                        "symbol": "YER"       
                    },
                    {
                        "shortname": "ZMK",
                        "longname": "Zambian Kwacha",
                        "users":  "Zambia",
                        "alternatives": "",
                        "symbol": "ZMK"       
                    },
                    {
                        "shortname": "ZWD",
                        "longname": "Zimbabwe dollar",
                        "users":  "Zimbabwe",
                        "alternatives": "",
                        "symbol": "Z$"
                    }];
                    var selector1 = document.getElementById('currency_1');
                    var selector2 = document.getElementById('currency_2');
                    for (var i = 0; i < cur_arr.length; i++) {
                        var option1 = document.createElement('option');
                        var option2 = document.createElement('option');
                        
                        option1.text = '(' + cur_arr[i].shortname + ')' + ' ' + cur_arr[i].longname;
                        option1.value = cur_arr[i].shortname;
                        
                        option2.text = '(' + cur_arr[i].shortname + ')' + ' ' + cur_arr[i].longname;
                        option2.value = cur_arr[i].shortname;
                        
                        selector1.add(option1);
                        selector2.add(option2);
                    }
                    
            }