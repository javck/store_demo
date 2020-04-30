範例說明
=======

##初始化

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

    上傳素材
    素材網址：https://reurl.cc/xZa75Z

    1.將assets檔案放置於/public資料夾
    作法為下載assets.zip後，上傳至/public資料夾後進行解壓縮

    2.將圖檔放置於/storage/app/public
    作法為下載storage_public.zip後，將所有內容放進/storage/app/public資料夾








##第七單元執行注意
因為表格結構有變更，如欲執行範例，需先重新執行migrate和seed。指令如下：
php artisan migate
php artisan db:seed

如果過程中遇到問題，建議將資料庫所有表格刪除後，重新再執行以上指令。

##後台登入帳密
管理員 admin/password
