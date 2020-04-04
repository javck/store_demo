範例說明
=======

##初始化
將本專案clone到本地端之後，需先下載套件並新增.env以及資料庫。
新增套件指令： composer install


##第七單元執行注意
因為表格結構有變更，如欲執行範例，需先重新執行migrate和seed。指令如下：
php artisan migate
php artisan db:seed

如果過程中遇到問題，建議將資料庫所有表格刪除後，重新再執行以上指令。
