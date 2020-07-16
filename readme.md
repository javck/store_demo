範例說明
=======

## 使用提示

    本範例專案的版型使用的是付費版型Canvas，相關內容並不包含在版本控管的檔案內。因此未導入Canvas套版檔案的學員，你看到的畫面將會跑版，此為正常現象，你可考慮自行調整版型或者是購買Canvas套版來導入。
    有購買Canvas套版的學員，請參考Canvas教學單元的說明，將CSS以及JS檔案導入，就能夠讓畫面正常顯示。

## 初始化

    將本專案clone到本地端之後，需先下載套件並新增.env以及資料庫。
    專案網址： https://github.com/javck/store_demo.git

    安裝所有套件指令： composer install

    生成且設定.env檔案

    設定好資料庫之後，在資料庫生成所有表格
    生成表格指令：php artisan migrate

    生成完所有表格之後，先安裝Voyager
    安裝Voyager指令：php artisan voyager:install

    安裝完Voyager之後，生成示範資料
    生成示範資料指令：php artisan db:seed

    生成storage捷徑指令：php artisan storage:link

    上傳素材
    素材網址：https://reurl.cc/3DypdM(存放於OneDrive，如果無法開啟請改用下方連結)

    替代下載網址：
    assets檔案：https://goblinlab.org/downloads/assets.zip
    圖檔：https://goblinlab.org/downloads/storage_public.zip

    1.將assets檔案放置於/public資料夾
    作法為下載assets.zip後，上傳至/public資料夾後進行解壓縮。若出現asset資料夾，把裡頭的js和css資料夾移到/publics資料夾後刪除asset資料夾

    2.將圖檔放置於/storage/app/public
    作法為下載storage_public.zip後，將所有內容放進/storage/app/public資料夾

    






## 第七單元執行注意
因為表格結構有變更，如欲執行範例，需先重新執行migrate和seed。指令如下：
php artisan migate
php artisan db:seed

如果過程中遇到問題，建議將資料庫所有表格刪除後，重新再執行以上指令。

## 後台登入帳密
管理員 admin/password

## 問題排除
[Laravel常見問題排除](https://hackmd.io/@javck/BkJgR1CoI)
