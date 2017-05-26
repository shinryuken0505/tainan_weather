程式用途:
抓取台南地區氣象測站(自動,局屬)雨量,溫度,濕度資料,並存放於資料庫
LAT 緯度 (座標系統採TWD67)
LON 經度 (座標系統採TWD67)
ELEV 高度，單位 公尺
WDIR 風向，單位 度，風向 0 表示無風
WDSD 風速，單位 公尺/秒
TEMP 溫度，單位 攝氏
HUMD 相對濕度，單位 百分比率，此處以實數 0-1.0 記錄
PRES 測站氣壓，單位 百帕
H_24R 日累積雨量，單位 毫米

資料來源:
自動氣象站資料集說明檔:
http://opendata.cwb.gov.tw/opendatadoc/DIV2/A0001-001.pdf
資料集：http://opendata.cwb.gov.tw/govdownload?dataid=O-A0001-001&authorizationkey=rdec-key-123-45678-011121314

局屬氣象站資料集說明檔:
http://opendata.cwb.gov.tw/opendatadoc/DIV2/A0003-001.pdf
資料集：http://opendata.cwb.gov.tw/govdownload?dataid=O-A0003-001&authorizationkey=rdec-key-123-45678-011121314


安裝說明:
1.匯入weather.sql
2.設定config.php
3.執行curl.php(可設定排程)
