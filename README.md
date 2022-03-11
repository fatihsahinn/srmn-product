GİRİŞ
------------

Projemde ana dizinde bulunan index.php'de basit bir routing(yönlendirme) mevcuttur.
views klasöründe görüntü tarafı bulunuyor.
views/index.php dosyası ilk giriş yaptığımızda karşımıza gelen dosyadır. Basit bir bootstrapla form mevcuttur.
Gönderilen formu views/stocks.php post eder ardından kontrol eder ve json olarak cevap verir. Gelen json cevap session yardımıyla anasayfaya 
görüntü olarak aktarılır.
views/stockGET.php ise /stocks dizinine gidildiğinde olan kayıtları listeler.
Mysql bağlantısı olarak PDO ile db/db_connection.php dizininden bağlantıyı başlatır ve ardından sayfalara require_once ile tekrar include etmemesi şartıyla eklenir.
db/ klasörü içerisinde projeye ait sql dosyası bulunmaktadır.
js ve css klasörü bootstrapın min kütüphanesini içermektedir.
.htaccess dosyasında ise route ile ilgili işlem kodları mevcuttur.

