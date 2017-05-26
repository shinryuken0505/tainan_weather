程式用途:<br>
抓取台南地區氣象測站(自動,局屬)雨量,溫度,濕度資料,並存放於資料庫<br>
LAT 緯度 (座標系統採TWD67)<br>
LON 經度 (座標系統採TWD67)<br>
ELEV 高度，單位 公尺<br>
WDIR 風向，單位 度，風向 0 表示無風<br>
WDSD 風速，單位 公尺/秒<br>
TEMP 溫度，單位 攝氏<br>
HUMD 相對濕度，單位 百分比率，此處以實數 0-1.0 記錄<br>
PRES 測站氣壓，單位 百帕<br>
H_24R 日累積雨量，單位 毫米<br>
CITY 縣市<br>
CITY_SN 縣市編號<br>
TOWN 鄉鎮<br>
TOWN_SN 鄉鎮編號<br>
<br>
資料來源:<br>
自動氣象站資料集說明檔:<br>
http://opendata.cwb.gov.tw/opendatadoc/DIV2/A0001-001.pdf<br>
資料集：http://opendata.cwb.gov.tw/govdownload?dataid=O-A0001-001&authorizationkey=rdec-key-123-45678-011121314<br>
<br>
局屬氣象站資料集說明檔:<br>
http://opendata.cwb.gov.tw/opendatadoc/DIV2/A0003-001.pdf<br>
資料集：http://opendata.cwb.gov.tw/govdownload?dataid=O-A0003-001&authorizationkey=rdec-key-123-45678-011121314<br>
<br>
安裝說明:<br>
1.匯入weather.sql<br>
2.設定config.php<br>
3.執行curl.php(可設定排程)
