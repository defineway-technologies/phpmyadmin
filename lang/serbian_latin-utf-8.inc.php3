<?php
/* $Id$ */

/**
 * Translated by:
 *     Igor Mladenovic <mligor@zimco.com>, David Trajkovic <tdavid@ptt.yu>
 *     Mihailo Stefanovic <mst@mikis.org>, Branislav Jovanovic <fangorn@eunet.yu>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('bajtova', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ned', 'Pon', 'Uto', 'Sre', '�et', 'Pet', 'Sub');
$month = array('jan', 'feb', 'mar', 'apr', 'maj', 'jun', 'jul', 'avg', 'sep', 'okt', 'nov', 'dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B %Y. u %H:%M';
$timespanfmt = '%s dana, %s sati, %s minuta i %s sekundi';

$strAPrimaryKey = 'Primarni klju� je upravo dodat %s';
$strAbortedClients = 'Prekinuto';
$strAbsolutePathToDocSqlDir = 'Unesite kompletnu putanju do direktorijuma docSQL na veb serveru';
$strAccessDenied = 'Pristup odbijen';
$strAccessDeniedExplanation = 'phpMyAdmin je poku�ao da se pove�e na MySQL server, ali je server odbio povezivanje. Proverite naziv doma�ina, korisni�ko ime i lozinku u config.inc.php i uverite se da odgovaraju podacima koje ste dobili od administratora MySQL servera.';
$strAction = 'Akcija';
$strAddAutoIncrement = 'Dodaj AUTO_INCREMENT vrednost';
$strAddDeleteColumn = 'Dodaj/obri�i kolonu';
$strAddDeleteRow = 'Dodaj/obri�i polje za kriterijum';
$strAddDropDatabase = 'Dodaj DROP DATABASE';
$strAddIntoComments = 'Dodaj u komentare';
$strAddNewField = 'Dodaj novo polje';
$strAddPriv = 'Dodaj novu privilegiju';
$strAddPrivMessage = 'Dodali ste novu privilegiju.';
$strAddPrivilegesOnDb = 'Dodaj privilegije na slede�oj bazi';
$strAddPrivilegesOnTbl = 'Dodaj privilegije na slede�oj tabeli';
$strAddSearchConditions = 'Dodaj uslove pretra�ivanja (deo "WHERE" upita):';
$strAddToIndex = 'Dodaj u klju� &nbsp;%s&nbsp;kolona(e)';
$strAddUser = 'Dodaj novog korisnika';
$strAddUserMessage = 'Dodali ste novog korisnika.';
$strAddedColumnComment = 'Dodat je komentar koloni';
$strAddedColumnRelation = 'Dodata je relacija koloni';
$strAdministration = 'Administracija';
$strAffectedRows = 'Obuhva�eno redova:';
$strAfter = 'Posle %s';
$strAfterInsertBack = 'Nazad na prethodnu stranu';
$strAfterInsertNewInsert = 'Dodaj jo� jedan novi red';
$strAll = 'Sve';
$strAllTableSameWidth = 'prikaz svih tabela iste �irine?';
$strAlterOrderBy = 'Promeni redosled u tabeli';
$strAnIndex = 'Klju� je upravo dodat %s';
$strAnalyzeTable = 'Analiziraj tabelu';
$strAnd = 'i';
$strAny = 'Bilo koji';
$strAnyColumn = 'Bilo koja kolona';
$strAnyDatabase = 'Bilo koja baza podataka';
$strAnyHost = 'Bilo koji doma�in';
$strAnyTable = 'Bilo koja tabela';
$strAnyUser = 'Bilo koji korisnik';
$strArabic = 'Arapski';
$strArmenian = 'Jermenski';
$strAscending = 'Rastu�i';
$strAtBeginningOfTable = 'Na po�etku tabele';
$strAtEndOfTable = 'Na kraju tabele';
$strAttr = 'Atributi';
$strAutodetect = 'automatski';
$strAutomaticLayout = 'Automatski raspored';

$strBack = 'Nazad';
$strBaltic = 'Balti�ki';
$strBeginCut = 'PO�ETAK REZ';
$strBeginRaw = 'PO�ETAK SIROVO';
$strBinary = 'Binarni';
$strBinaryDoNotEdit = 'Binarni - ne menjaj';
$strBookmarkAllUsers = 'Dozvoli svakom korisniku da pristupa ovom markeru';
$strBookmarkDeleted = 'Obele�iva� je upravo obrisan.';
$strBookmarkLabel = 'Naziv';
$strBookmarkOptions = 'Opcije markera';
$strBookmarkQuery = 'Obele�en SQL-upit';
$strBookmarkThis = 'Obele�i SQL-upit';
$strBookmarkView = 'Vidi samo';
$strBrowse = 'Pregled';
$strBrowseForeignValues = 'Pregledaj strane vrednosti';
$strBulgarian = 'Bugarski';
$strBzError = 'phpMyAdmin nije mogao da kompresuje sadr�aj baze zbog neispravne BZ2 ekstenzije u ovoj verziji PHP-a. Preporu�uje se da podesite <code>$cfg[\'BZipDump\']</code> direktivu u va�oj phpMyAdmin konfiguracionoj datoteci na <code>FALSE</code>. Ako �elite da koristite mogu�nosti BZ2 kompresije, trebalo bi da pre�ete na noviju verziju PHP-a. Vidite PHP izve�taj o gre�kama %s za detalje.';
$strBzip = '"bzip-ovano"';

$strCSVOptions = 'CSV opcije';
$strCannotLogin = 'Ne mogu da se prijavim na MySQL server';
$strCantLoad = 'ne mogu da u�itam ekstenziju %s,<br />molim proverite PHP konfiguraciju';
$strCantLoadMySQL = 'ne mogu da u�itam MySQL ekstenziju,<br /> molim pogledajte PHP konfiguraciju.';
$strCantLoadRecodeIconv = 'Ne mogu da u�itam iconv ili recode ekstenzije potrebne za konverziju skupova znakova, podesite PHP da dozvoli kori��enje ovih ekstenzija ili onemogu�ite konverziju skupova znakova u phpMyAdmin-u.';
$strCantRenameIdxToPrimary = 'Ne mogu da promenim klju� u PRIMARY (primarni) !';
$strCantUseRecodeIconv = 'Ne mogu da koristim iconv ili libiconv ili recode_string funkcije iako ekstenzija prijavljuje da je u�itana. Proverite va�u PHP konfiguraciju.';
$strCardinality = 'Kardinalnost';
$strCarriage = 'Novi red (carriage return): \\r';
$strCaseInsensitive = 'Ne razlikuje mala i velika slova';
$strCaseSensitive = 'Razlikuje mala i velika slova';
$strCentralEuropean = 'Centralnoevropski';
$strChange = 'Promeni';
$strChangeCopyMode = 'Napravi novog korisnika sa istim privilegijama i ...';
$strChangeCopyModeCopy = '... sa�uvaj stare.';
$strChangeCopyModeDeleteAndReload = ' ... obri�i starog iz tabele korisnika i zatim ponovo u�itaj privilegije.';
$strChangeCopyModeJustDelete = ' ... obri�i stare iz tabela korisnika.';
$strChangeCopyModeRevoke = ' ... obustavi sve privilegije starog korisnika i zatim ga obri�i.';
$strChangeCopyUser = 'Promeni informacije o prijavi / Kopiraj korisnika';
$strChangeDisplay = 'Izaberi polja za prikaz';
$strChangePassword = 'Promeni lozinku';
$strCharset = 'Karakter set';
$strCharsetOfFile = 'Karakter set datoteke:';
$strCharsets = 'Kodne strane';
$strCharsetsAndCollations = 'Karakter setovi i sortiranje';
$strCheckAll = 'Ozna�i sve';
$strCheckDbPriv = 'Proveri privilegije baze podataka';
$strCheckPrivs = 'Proveri privilegije';
$strCheckPrivsLong = 'Proveri privilegije za bazu &quot;%s&quot;.';
$strCheckTable = 'Proveri tabelu';
$strChoosePage = 'Izaberite stranu koju menjate';
$strColComFeat = 'Prikazujem komentare kolone';
$strCollation = 'Sortiranje';
$strColumn = 'Kolona';
$strColumnNames = 'Imena kolona';
$strColumnPrivileges = 'Privilegije vezane za kolone';
$strCommand = 'Naredba';
$strComments = 'Komentari';
$strCompleteInserts = 'Kompletan INSERT (sa imenima polja)';
$strCompression = 'Kompresija';
$strConfigFileError = 'phpMyAdmin nije mogao da pro�ita va�u konfiguracionu datoteku!<br />Ovo se mo�e desiti ako PHP na�e gre�ku u procesiranju ili ne mo�e da prona�e datoteku.<br />Pozovite konfiguracionu datoteku direktno koriste�i donji link i pro�itajte poruke o gre�ci koje dobijate. U ve�ini slu�ajeve negde nedostaje navodnik ili ta�ka-zarez.<br />Ako dobijete praznu stranu, sve je u redu.';
$strConfigureTableCoord = 'Podesite koordinate za tabelu %s';
$strConfirm = 'Da li stvarno �elite da to uradite?';
$strConnections = 'Konekcije';
$strConstraintsForDumped = 'Ograni�enja za izvezene tabele';
$strConstraintsForTable = 'Ograni�enja za tabele';
$strCookiesRequired = 'Kola�i�i (Cookies) moraju u ovom slu�aju biti aktivni.';
$strCopyTable = 'Kopiraj tabelu u (baza<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s je kopirana u %s.';
$strCopyTableSameNames = 'Ne mogu da kopiram tabelu u samu sebe!';
$strCouldNotKill = 'phpMyAdmin nije mogao da prekine proces %s. Verovatno je ve� zatvoren.';
$strCreate = 'Napravi';
$strCreateIndex = 'Napravi klju� na&nbsp;%s&nbsp;kolona';
$strCreateIndexTopic = 'Napravi novi klju�';
$strCreateNewDatabase = 'Napravi novu bazu podataka';
$strCreateNewTable = 'Napravi novu tabelu u bazi %s';
$strCreatePage = 'Napravi novu stranu';
$strCreatePdfFeat = 'Pravljenje PDF-ova';
$strCriteria = 'Kriterijum';
$strCroatian = 'Hrvatski';
$strCyrillic = '�irili�ni';
$strCzech = '�e�ki';

$strDBComment = 'Komentar baze:';
$strDBGContext = 'Kontekst';
$strDBGContextID = 'Kontekst ID';
$strDBGHits = 'Pogodaka';
$strDBGLine = 'Linija';
$strDBGMaxTimeMs = 'Max vreme, ms';
$strDBGMinTimeMs = 'Min vreme, ms';
$strDBGModule = 'Modul';
$strDBGTimePerHitMs = 'Vreme/pogodak, ms';
$strDBGTotalTimeMs = 'Ukupno vreme, ms';
$strDanish = 'Danski';
$strData = 'Podaci';
$strDataDict = 'Re�nik podataka';
$strDataOnly = 'Samo podaci';
$strDatabase = 'Baza podataka';
$strDatabaseExportOptions = 'Opcije za izvoz baze';
$strDatabaseHasBeenDropped = 'Baza %s je odba�ena.';
$strDatabaseNoTable = 'Baza ne sadr�i tabele!';
$strDatabaseWildcard = 'Baza (d�oker znaci dozvoljeni):';
$strDatabases = 'Baze';
$strDatabasesDropped = '%s baza je uspe�no odba�eno.';
$strDatabasesStats = 'Statistika baze';
$strDatabasesStatsDisable = 'Isklju�i statistike';
$strDatabasesStatsEnable = 'Uklju�i statistike';
$strDatabasesStatsHeavyTraffic = 'Napomena: uklju�ivanje statistika mo�e prouzrokovati veliki saobra�aj izme�u veb i MySQL servera.';
$strDbPrivileges = 'Privilegije vezane za bazu';
$strDbSpecific = 'Specifi�no za bazu';
$strDefault = 'Podrazumevano';
$strDefaultValueHelp = 'Za podrazumevanu vrednost, unesite samo jednu vrednost, bez kosih crta ili navodnika u ovom obliku: a';
$strDelOld = 'Trenutna strana ima reference na tabele koje vi�e ne postoje. �elite li da obri�ete te reference?';
$strDelete = 'Obri�i';
$strDeleteAndFlush = 'Obri�i korisnike i ponovo u�itaj privilegije.';
$strDeleteAndFlushDescr = 'Ovo je naj�istiji na�in, ali ponovno u�itavanje privilegina mo�e da potraje.';
$strDeleteFailed = 'Brisanje nije uspelo!';
$strDeleteUserMessage = 'Upravo ste obrisali korisnika: %s.';
$strDeleted = 'Red je obrisan';
$strDeletedRows = 'Obrisani redovi:';
$strDeleting = 'Bri�em %s';
$strDescending = 'Opadaju�i';
$strDescription = 'Opis';
$strDictionary = 're�nik';
$strDisabled = 'Onemogu�eno';
$strDisplay = 'Prika�i';
$strDisplayFeat = 'Prika�i osobine';
$strDisplayOrder = 'Redosled prikaza:';
$strDisplayPDF = 'Prika�i PDF shemu';
$strDoAQuery = 'Napravi "upit po primeru" (d�oker: "%")';
$strDoYouReally = 'Da li stvarno ho�ete da ';
$strDocu = 'Dokumentacija';
$strDrop = 'Odbaci';
$strDropDB = 'Odbaci bazu %s';
$strDropSelectedDatabases = 'Odbaci izabrane baze';
$strDropTable = 'Odbaci tabelu';
$strDropUsersDb = 'Odbaci baze koje se zovu isto kao korisnici.';
$strDumpComments = 'Uklju�i komentare kolona kao komentare unutar SQL-a';
$strDumpSaved = 'Sadr�aj baze je sa�uvan u datoteku %s.';
$strDumpXRows = 'Prika�i %s redova po�ev�i od reda %s.';
$strDumpingData = 'Prikaz podataka tabele';
$strDynamic = 'dinami�ki';

$strEdit = 'Promeni';
$strEditPDFPages = 'Izmena PDF strana';
$strEditPrivileges = 'Promeni privilegije';
$strEffective = 'Efektivne';
$strEmpty = 'Isprazni';
$strEmptyResultSet = 'MySQL je vratio prazan rezultat (nula redova).';
$strEnabled = 'Omogu�eno';
$strEnd = 'Kraj';
$strEndCut = 'KRAJ REZ';
$strEndRaw = 'KRAJ SIROVO';
$strEnglish = 'Engleski';
$strEnglishPrivileges = ' Napomena: MySQL imena privilegija moraju da budu na engleskom ';
$strError = 'Gre�ka';
$strEstonian = 'Estonski';
$strExcelOptions = 'Excel opcije';
$strExecuteBookmarked = 'Izvr�i upam�en upit';
$strExplain = 'Objasni SQL';
$strExport = 'Izvoz';
$strExportToXML = 'Izvoz u XML format';
$strExtendedInserts = 'Pro�ireni INSERT';
$strExtra = 'Dodatno';

$strFailedAttempts = 'Neuspelih poku�aja';
$strField = 'Polje';
$strFieldHasBeenDropped = 'Polje %s je obrisano';
$strFields = 'Polja';
$strFieldsEmpty = ' Broj polja je nula! ';
$strFieldsEnclosedBy = 'Polja ograni�ena sa';
$strFieldsEscapedBy = 'Escape karakter &nbsp; &nbsp; &nbsp;';
$strFieldsTerminatedBy = 'Polja razdvojena sa';
$strFileAlreadyExists = 'Datoteka %s ve� postoji na serveru, promenite ime datoteke ili uklju�ite opciju prepisivanja.';
$strFileCouldNotBeRead = 'Datoteku nije mogu�e pro�itati';
$strFileNameTemplate = '�ablon imena datoteke';
$strFileNameTemplateHelp = 'Koristi __DB__ za ime baze, __TABLE__ za ime tabele  i %sbilo koju strftime%s opciju za specifikaciju vremena, i ekstenzija �e automatski biti dodata. Sav ostali tekst bi�e sa�uvan.';
$strFileNameTemplateRemember = 'zapamti �ablon';
$strFixed = 'sre�eno';
$strFlushPrivilegesNote = 'Napomena: phpMyAdmin uzima privilegije korisnika direktno iz MySQL tabela privilegija. Sadr�aj ove tabele mo�e se razlikovati od privilegija koje server koristi ako su vr�ene ru�ne izmene. U tom slu�aju %sponovo u�itajte privilegije%s pre nego �to nastavite.';
$strFlushTable = 'Osve�i tabelu ("FLUSH")';
$strFormEmpty = 'Nedostaje vrednost u obrascu!';
$strFormat = 'Format';
$strFullText = 'Pun tekst';
$strFunction = 'Funkcija';

$strGenBy = 'Generisao';
$strGenTime = 'Vreme kreiranja';
$strGeneralRelationFeat = 'Op�te osobine relacija';
$strGerman = 'Nema�ki';
$strGlobal = 'globalno';
$strGlobalPrivileges = 'Globalne privilegije';
$strGlobalValue = 'Globalna vrednost';
$strGo = 'Kreni';
$strGrantOption = 'Omogu�i';
$strGrants = 'Omogu�i';
$strGreek = 'Gr�ki';
$strGzip = '"gzip-ovano"';

$strHasBeenAltered = 'je promenjen(a).';
$strHasBeenCreated = 'je kreiran(a).';
$strHaveToShow = 'Morate izabrati bar jednu kolonu za prikaz';
$strHebrew = 'Hebrejski';
$strHome = 'Po�etna strana';
$strHomepageOfficial = 'phpMyAdmin veb sajt';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Download stranica';
$strHost = 'Doma�in';
$strHostEmpty = 'Ime doma�ina je prazno!';
$strHungarian = 'Ma�arski';

$strId = 'ID';
$strIdxFulltext = 'Tekst klju�';
$strIfYouWish = 'Ako �elite da izlistate samo neke kolone u tabeli, navedite ih razdvojene zarezom';
$strIgnore = 'Ignori�i';
$strIgnoringFile = 'Ignori�em datoteku %s';
$strImportDocSQL = 'Uvoz docSQL datoteka';
$strImportFiles = 'Uvoz datoteka';
$strImportFinished = 'Uvoz zavr�en';
$strInUse = 'se koristi';
$strIndex = 'Klju�';
$strIndexHasBeenDropped = 'Klju� %s je obrisan';
$strIndexName = 'Ime klju�a :';
$strIndexType = 'Tip klju�a :';
$strIndexes = 'Klju�evi';
$strInnodbStat = 'InnoDB status';
$strInsecureMySQL = 'Va�a konfiguraciona datoteka sadr�i pode�avanja (root bez lozinke) koja odgovaraju standardnom MySQL privilegovanom nalogu. Va� MySQL server radi sa ovim pode�avanjima, otvoren je za upade, i zaista treba da ispravite ovaj sigurnosni rizik.';
$strInsert = 'Novi zapis';
$strInsertAsNewRow = 'Unesi kao novi red';
$strInsertNewRow = 'Unesi novi red';
$strInsertTextfiles = 'Uvezi podatke iz tekstualne datoteke';
$strInsertedRowId = 'ID umetnutih redova:';
$strInsertedRows = 'Uneseno redova:';
$strInstructions = 'Uputstva';
$strInternalNotNecessary = '* Unutra�nja relacija nije neophodna kada postoji i u InnoDB.';
$strInternalRelations = 'Unutra�nje relacije';
$strInvalidName = '"%s" je rezervisana re�, \nne mo�ete je koristiti kao ime polja, tabele ili baze.';

$strJapanese = 'Japanski';
$strJumpToDB = 'Pre�i na bazu &quot;%s&quot;.';
$strJustDelete = 'Samo obri�i korisnike iz tabele privilegija.';
$strJustDeleteDescr = '&quot;Obrisani&quot; korisnici �e i dalje imati pristup serveru dok privilegije ne budu ponovo u�itane.';

$strKeepPass = 'Nemoj da menja� lozinku';
$strKeyname = 'Ime klju�a';
$strKill = 'Obustavi';
$strKorean = 'Korejski';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'LaTeX opcije';
$strLandscape = 'Polo�eno';
$strLatexCaption = 'Komentar tabele';
$strLatexContent = 'Sadr�aj tabele __TABLE__';
$strLatexContinued = '(nastavljeno)';
$strLatexContinuedCaption = 'Nastavljen komentar tabele';
$strLatexIncludeCaption = 'Uklju�i komentar tabele';
$strLatexLabel = 'Oznaka klju�a';
$strLatexStructure = 'Struktura tabele __TABLE__';
$strLength = 'Du�ina';
$strLengthSet = 'Du�ina/Vrednost*';
$strLimitNumRows = 'Broj redova po strani';
$strLineFeed = 'Oznaka za kraj linije: \\n';
$strLines = 'Linije';
$strLinesTerminatedBy = 'Linije se zavr�avaju sa';
$strLinkNotFound = 'Veza nije prona�ena';
$strLinksTo = 'Veze ka';
$strLithuanian = 'Litvanski';
$strLoadExplanation = 'Najbolji metod je ve� izabran, ali ga mo�ete promeniti ako ne radi.';
$strLoadMethod = 'LOAD metod';
$strLocalhost = 'Lokalni';
$strLocationTextfile = 'Lokacija tekstualne datoteke';
$strLogPassword = 'Lozinka:';
$strLogServer = 'Server';
$strLogUsername = 'Korisni�ko ime:';
$strLogin = 'Prijavljivanje';
$strLoginInformation = 'Podaci o prijavi';
$strLogout = 'Odjavljivanje';

$strMIME_MIMEtype = 'MIME-tipovi';
$strMIME_available_mime = 'Dostupni MIME-tipovi';
$strMIME_available_transform = 'Dostupne transformacije';
$strMIME_description = 'Opis';
$strMIME_file = 'Ime datoteke';
$strMIME_nodescription = 'Nema opisa za ovu transformaciju.<br />Molimo pitajte autora �ta %s radi.';
$strMIME_transformation = 'Tranformacije �ita�a';
$strMIME_transformation_note = 'Za listu dostupnih opcija transformacije i njihove transformacije MIME-tipova, kliknite na %sopise transformacija%s';
$strMIME_transformation_options = 'Opcije transformacije';
$strMIME_transformation_options_note = 'Molimo unesite vrednosti za opcije transformacije koriste�i ovaj oblik: \'a\',\'b\',\'c\'...<br />Ako treba da unesete obrnutu kosu crtu ("\\") ili apostrof ("\'") u te vrednosti, stavite obrnutu kosu crtu ispred njih (na primer \'\\\\xyz\' ili \'a\\\'b\').';
$strMIME_without = 'MIME-tipovi prikazani u kurzivu nemaju odvojene funkcije transformacije.';
$strMissingBracket = 'Nedostaje zagrada';
$strModifications = 'Izmene su sa�uvane';
$strModify = 'Promeni';
$strModifyIndexTopic = 'Izmeni klju�';
$strMoreStatusVars = 'Jo� statusnih promenljivih';
$strMoveTable = 'Pomeri tabelu u (baza<b>.</b>tabela):';
$strMoveTableOK = 'Tabela %s je pomerena u %s.';
$strMoveTableSameNames = 'Ne mogu da premestim tabelu u samu sebe!';
$strMultilingual = 'vi�ejezi�ki';
$strMustSelectFile = 'Morate izabrati datoteku koju �elite da umetnete.';
$strMySQLCharset = 'MySQL set karaktera';
$strMySQLReloaded = 'MySQL ponovo pokrenut.';
$strMySQLSaid = 'MySQL re�e: ';
$strMySQLServerProcess = 'MySQL %pma_s1% pokrenut na %pma_s2%, prijavljen kao %pma_s3%';
$strMySQLShowProcess = 'Prika�i listu procesa';
$strMySQLShowStatus = 'Prika�i MySQL informacije o toku rada';
$strMySQLShowVars = 'Prika�i MySQL sistemske promenljive';

$strName = 'Ime';
$strNext = 'Slede�i';
$strNo = 'Ne';
$strNoDatabases = 'Baza ne postoji';
$strNoDatabasesSelected = 'Nije izabrana ni jedna baza.';
$strNoDescription = 'nema opisa';
$strNoDropDatabases = '"DROP DATABASE" komanda je onemogu�ena.';
$strNoExplain = 'Presko�i obja�njavanje SQL-a';
$strNoFrames = 'phpMyAdmin preferira �ita�e koji podr�avaju okvire.';
$strNoIndex = 'Klju� nije definisan!';
$strNoIndexPartsDefined = 'Delovi klju�a nisu definisani!';
$strNoModification = 'Nema izmena';
$strNoOptions = 'Ne postoje opcije za ovaj format';
$strNoPassword = 'Nema lozinke';
$strNoPermission = 'Veb serveru nije dozvoljeno da sa�uva datoteku %s.';
$strNoPhp = 'bez PHP koda';
$strNoPrivileges = 'Nema privilegija';
$strNoQuery = 'Nema SQL upita!';
$strNoRights = 'Nije Vam dozvoljeno da budete ovde!';
$strNoSpace = 'Nedovoljno prostora za snimanje datoteke %s.';
$strNoTablesFound = 'Tabele nisu prona�ene u bazi.';
$strNoUsersFound = 'Korisnik nije na�en.';
$strNoUsersSelected = 'Korisnik nije izabran.';
$strNoValidateSQL = 'Presko�i proveru SQL-a';
$strNone = 'nema';
$strNotNumber = 'Ovo nije broj!';
$strNotOK = 'nije u redu';
$strNotSet = '<b>%s</b> tabela nije prona�ena ili nije postavljena u %s';
$strNotValidNumber = 'nije odgovaraju�i broj kolone!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s pogodaka unutar tabele <i>%s</i>';
$strNumSearchResultsTotal = '<b>Ukupno:</b> <i>%s</i> pogodaka';
$strNumTables = 'Tabele';

$strOK = 'U redu';
$strOftenQuotation = 'Navodnici koji se koriste. OPCIONO se misli da neka polja mogu, ali ne moraju da budu pod znacima navoda.';
$strOperations = 'Operacije';
$strOptimizeTable = 'Optimizuj tabelu';
$strOptionalControls = 'Opciono. Znak koji prethodi specijalnim znacima.';
$strOptionally = 'OPCIONO';
$strOptions = 'Opcije';
$strOr = 'ili';
$strOverhead = 'Prekora�enje';
$strOverwriteExisting = 'Prepi�i postoje�e datoteke';

$strPHP40203 = 'Koristite PHP 4.2.3, koji ima ozbiljan bag sa vi�ebajtnim stringovima (mbstring). Pogledajte izve�taj o gre�ci br. 19404. Ova verzija PHP-a se ne preporu�uje za kori��enje sa phpMyAdmin.';
$strPHPVersion = 'verzija PHP-a';
$strPageNumber = 'Broj strane:';
$strPaperSize = 'Dimenzije papira';
$strPartialText = 'Deo teksta';
$strPassword = 'Lozinka';
$strPasswordChanged = 'Lozinka za %s je uspe�no promenjena.';
$strPasswordEmpty = 'Lozinka je prazna!';
$strPasswordNotSame = 'Lozinke nisu identi�ne!';
$strPdfDbSchema = 'Shema baze "%s" - Strana %s';
$strPdfInvalidPageNum = 'Nedefinisan broj PDF strane!';
$strPdfInvalidTblName = 'Tabela "%s" ne postoji!';
$strPdfNoTables = 'Nema tabela';
$strPerHour = 'na sat';
$strPerMinute = 'u minutu';
$strPerSecond = 'u sekundi';
$strPhoneBook = 'telefonski imenik';
$strPhp = 'Napravi PHP kod';
$strPmaDocumentation = 'phpMyAdmin dokumentacija';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> direktiva MORA biti pode�ena u konfiguracionoj datoteci!';
$strPortrait = 'Uspravno';
$strPos1 = 'Po�etak';
$strPrevious = 'Prethodna';
$strPrimary = 'Primarni';
$strPrimaryKey = 'Primarni klju�';
$strPrimaryKeyHasBeenDropped = 'Primarni klju� je obrisan';
$strPrimaryKeyName = 'Ime primarnog klju�a mora da bude... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mora</b> biti ime <b>samo</b> primarnog klju�a!)';
$strPrint = '�tampaj';
$strPrintView = 'Za �tampu';
$strPrintViewFull = 'Pogled za �tampu (sa punim tekstom)';
$strPrivDescAllPrivileges = 'Uklju�uje sve privilegije osim GRANT.';
$strPrivDescAlter = 'Dozvoljava izmenu struktura postoje�ih tabela.';
$strPrivDescCreateDb = 'Dozvoljava kreiranje novih baza i tabela.';
$strPrivDescCreateTbl = 'Dozvoljava kreiranje novih tabela.';
$strPrivDescCreateTmpTable = 'Dozvoljava kreiranje privremenih tabela..';
$strPrivDescDelete = 'Dozvoljava brisanje podataka.';
$strPrivDescDropDb = 'Dozvoljava odbacivanje baza i tabela.';
$strPrivDescDropTbl = 'Dozvoljava odbacivanje tabela.';
$strPrivDescExecute = 'Dozvoljava pokretanje sa�uvanih procedura. Nema efekta u ovoj verziji MySQL-a.';
$strPrivDescFile = 'Dozvoljava uvoz podataka i njihov izvoz u datoteke.';
$strPrivDescGrant = 'Dozvoljava dodavanje korisnika i privilegija bez ponovnog u�itavanja tabela privilegija.';
$strPrivDescIndex = 'Dozvoljava kreiranje i brisanje klju�eva.';
$strPrivDescInsert = 'Dozvoljava umetanje i zamenu podataka.';
$strPrivDescLockTables = 'Dozvoljava zaklju�avanje tabela teku�im procesima.';
$strPrivDescMaxConnections = 'Ograni�ava broj novih konekcija koje korisnik mo�e ta otvori na sat.';
$strPrivDescMaxQuestions = 'Ograni�ava broj upita koje korisnik mo�e da uputi serveru za sat.';
$strPrivDescMaxUpdates = 'Ograni�ava broj komandi koje menjaju tabele ili baze koje korisnik mo�e da izvr�i na sat.';
$strPrivDescProcess3 = 'Dozvoljava prekidanje procesa drugih korisnika.';
$strPrivDescProcess4 = 'Dozvoljava pregled kompletnih upita u listi procesa.';
$strPrivDescReferences = 'Nema efekta u ovoj verziji MySQL-a.';
$strPrivDescReload = 'Dozvoljava ponovno u�itavanje pode�avanja servera i pra�njenje ke�a servera.';
$strPrivDescReplClient = 'Daje pravo korisniku da pita gde su glavni/pomo�ni serveri.';
$strPrivDescReplSlave = 'Potrebno zbog pomo�nih servera za replikaciju.';
$strPrivDescSelect = 'Dozvoljava �itanje podataka.';
$strPrivDescShowDb = 'Daje pristup kompletnoj listi baza.';
$strPrivDescShutdown = 'Dozvoljava ga�enje servera.';
$strPrivDescSuper = ' Dozvoljava povezivanje iako je dostignut maksimalan broj dozvoljenih veza; Neophodno za ve�inu administrativnih opcija kao �to su pode�avanje globalnih promenljivih ili prekidanje procesa ostalih korisnika.';
$strPrivDescUpdate = 'Dozvoljava izmenu podataka.';
$strPrivDescUsage = 'Nema privilegija.';
$strPrivileges = 'Privilegije';
$strPrivilegesReloaded = 'Privilegije su uspe�no ponovo u�itane.';
$strProcesslist = 'Lista procesa';
$strProperties = 'Svojstva';
$strPutColNames = 'Stavi imena polja u prvi red';

$strQBE = 'Upit po primeru';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryFrame = 'Prozor za upite';
$strQueryFrameDebug = 'Debugging informacije';
$strQueryFrameDebugBox = 'Aktivne promenljive za formular sa upitom:\nDB: %s\nTabela: %s\nServer: %s\n\nTrenutne promenljive za formular sa upitom:\nDB: %s\nTabela: %s\nServer: %s\n\nLokacija sa koje je otvoreno: %s\nLokacija okvira: %s.';
$strQueryOnDb = 'SQL upit na bazi <b>%s</b>:';
$strQuerySQLHistory = 'SQL istorijat';
$strQueryStatistics = '<b>Statistike upita</b>: %s upita je postavljeno serveru od njegovog pokretanja.';
$strQueryTime = 'Upit je trajao %01.4f sekundi';
$strQueryType = 'Vrsta upita';
$strQueryWindowLock = 'Ne prepisuj ovaj upit izvan prozora';

$strReType = 'Ponovite unos';
$strReceived = 'Primljeno';
$strRecords = 'Zapisi';
$strReferentialIntegrity = 'Proveri referencijalni integritet:';
$strRelationNotWorking = 'Dodatne mogu�nosti za rad sa povezanim tabelama su isklju�ene. Da biste saznali za�to, kliknite %sovde%s.';
$strRelationView = 'Relacioni pogled';
$strRelationalSchema = 'Relaciona shema';
$strRelations = 'Relacije';
$strReloadFailed = 'Ponovno pokretanje MySQL-a nije uspelo.';
$strReloadMySQL = 'Ponovo pokreni MySQL';
$strReloadingThePrivileges = 'Ponovo u�itavam privilegije';
$strRememberReload = 'Ne zaboravite da ponovo pokrenete server.';
$strRemoveSelectedUsers = 'Ukloni izabrane korisnike';
$strRenameTable = 'Promeni ime tabele u ';
$strRenameTableOK = 'Tabeli %s promenjeno ime u %s';
$strRepairTable = 'Popravi tabelu';
$strReplace = 'Zameni';
$strReplaceNULLBy = 'Zameni NULL sa';
$strReplaceTable = 'Zameni podatke u tabeli sa podacima iz datoteke';
$strReset = 'Resetuj';
$strResourceLimits = 'Ograni�enja resursa';
$strRevoke = 'Zabrani';
$strRevokeAndDelete = 'Obustavi sve aktivne privilegije korisnika i zatim ih obri�i.';
$strRevokeAndDeleteDescr = 'Korisnici �e i dalje imati USAGE privilegije dok se privilegije ponovo ne u�itaju.';
$strRevokeGrant = 'Zabrani GRANT';
$strRevokeGrantMessage = 'Zabranili ste GRANT privilegije za  %s';
$strRevokeMessage = 'Zabranili ste privilegije za %s';
$strRevokePriv = 'Zabrani privilegije';
$strRowLength = 'Du�ina reda';
$strRowSize = 'Veli�ina reda';
$strRows = 'Redova';
$strRowsFrom = ' redova po�ev od reda';
$strRowsModeFlippedHorizontal = 'horizontalnom (rotirana zaglavlja)';
$strRowsModeHorizontal = 'horizontalnom';
$strRowsModeOptions = 'u %s modu i ponovi zaglavlje posle svakog %s reda';
$strRowsModeVertical = 'vertikalnom';
$strRowsStatistic = 'Statistike reda';
$strRunQuery = 'Izvr�i SQL upit';
$strRunSQLQuery = 'Izvr�i SQL upit(e) na bazi %s';
$strRunning = 'na serveru %s';
$strRussian = 'Ruski';

$strSQL = 'SQL';
$strSQLOptions = 'SQL opcije';
$strSQLParserBugMessage = 'Postoji mogu�nost da ste prona�li bag u SQL parseru. Molimo ispitajte svoj upit pa�ljivo, i proverite da su navodnici ispravni i da ne nedostaju. Ostali mogu�i razlozi gre�ke mogu biti da ste poslali binarnu datoteku van oblasti za obi�an tekst. Mo�ete probati svoj upit u MySQL su�elju komandne linije. Donja poruka o gre�ci MySQL servera, ako je ima, mo�e vam pomo�i u otkrivanju problema. Ako i dalje imate probleme ili ako parser ne uspeva tamo gde uspeva su�elje komandne linije, svedite svoj SQL upit na jedan jedini upit koji stvara probleme i po�aljite nam izve�taj o gre�ci sa delom koda u donjoj REZ sekciji:';
$strSQLParserUserError = 'Izgleda da postoji gre�ka u va�em SQL upitu. Ovde je poruka o gre�ki MySQL servera, koja vam mo�e pomo�i u otkrivanju problema';
$strSQLQuery = 'SQL upit';
$strSQLResult = 'SQL rezultat';
$strSQPBugInvalidIdentifer = 'Neispravan identifikator';
$strSQPBugUnclosedQuote = 'Navodnik nije zatvoren';
$strSQPBugUnknownPunctuation = 'Nepoznat string interpunkcije';
$strSave = 'Sa�uvaj';
$strSaveOnServer = 'Sa�uvaj na server u direktorijum %s';
$strScaleFactorSmall = 'Faktor umanjenja je premali da bi shema stala na jednu stranu';
$strSearch = 'Pretra�ivanje';
$strSearchFormTitle = 'Pretra�ivanje baze';
$strSearchInTables = 'Unutar tabela:';
$strSearchNeedle = 'Re�i ili vrednosti koje se tra�e (d�oker: "%"):';
$strSearchOption1 = 'bar jednu od re�i';
$strSearchOption2 = 'sve re�i';
$strSearchOption3 = 'ta�an izraz';
$strSearchOption4 = 'kao regularni izraz';
$strSearchResultsFor = 'Rezultati pretrage za "<i>%s</i>" %s:';
$strSearchType = 'Tra�i:';
$strSecretRequired = 'Konfiguraciona datoteka zahteva tajnu lozinku (blowfish_secret).';
$strSelect = 'Selekcija';
$strSelectADb = 'Izaberite bazu';
$strSelectAll = 'Izaberi sve';
$strSelectFields = 'Izaberi polja (najmanje jedno)';
$strSelectNumRows = 'u upitu';
$strSelectTables = 'Izaberi tabele';
$strSend = 'Sa�uvaj kao datoteku';
$strSent = 'Poslato';
$strServer = 'Server %s';
$strServerChoice = 'Izbor servera';
$strServerStatus = 'Informacije o toku rada';
$strServerStatusUptime = 'Ovaj MySQL server radi ve� %s. Pokrenut je %s.';
$strServerTabProcesslist = 'Procesi';
$strServerTabVariables = 'Promenljive';
$strServerTrafficNotes = '<b>Saobra�aj servera</b>: Tabele pokazuju statistike mre�nog saobra�aja na ovom MySQL serveru od njegovog pokretanja.';
$strServerVars = 'Serverske promenljive i pode�avanja';
$strServerVersion = 'Verzija servera';
$strSessionValue = 'Vrednost sesije';
$strSetEnumVal = 'Ako je polje "enum" ili "set", unesite vrednosti u formatu: \'a\',\'b\',\'c\'...<br />Ako vam treba obrnuta kosa crta ("\\") ili apostrof ("\'") koristite ih u "izbegnutom" (escaped) obliku (na primer \'\\\\xyz\' ili \'a\\\'b\').';
$strShow = 'Prika�i';
$strShowAll = 'Prika�i sve';
$strShowColor = 'Prika�i boju';
$strShowCols = 'Prika�i kolone';
$strShowDatadictAs = 'Format re�nika podataka';
$strShowFullQueries = 'Prika�i kompletne upite';
$strShowGrid = 'Prika�i mre�u';
$strShowPHPInfo = 'Prika�i informacije o PHP-u';
$strShowTableDimension = 'Prika�i dimenzije tabele';
$strShowTables = 'Prika�i tabele';
$strShowThisQuery = 'Prika�i ponovo ovaj upit';
$strShowingRecords = 'Prikaz zapisa';
$strSimplifiedChinese = 'Pojednostavljeni kineski';
$strSingly = '(po jednom polju)';
$strSize = 'Veli�ina';
$strSort = 'Sortiranje';
$strSortByKey = 'Sortiraj po klju�u';
$strSpaceUsage = 'Zauze�e';
$strSplitWordsWithSpace = 'Re�i se odvajaju razmakom (" ").';
$strStatCheckTime = 'Poslednja provera';
$strStatCreateTime = 'Napravljeno';
$strStatUpdateTime = 'Poslednja izmena';
$strStatement = 'Ime';
$strStatus = 'Status';
$strStrucCSV = 'CSV format';
$strStrucData = 'Struktura i podaci';
$strStrucDrop = 'Dodaj \'DROP TABLE\'';
$strStrucExcelCSV = 'CSV za MS Excel';
$strStrucOnly = 'Samo struktura';
$strStructPropose = 'Predlo�i strukturu tabele';
$strStructure = 'Struktura';
$strSubmit = 'Po�alji';
$strSuccess = 'Va� SQL upit je uspe�no izvr�en';
$strSum = 'Ukupno';
$strSwedish = '�vedski';
$strSwitchToTable = 'Pre�i na kopiranu tabelu';

$strTable = 'Tabela';
$strTableComments = 'Komentari tabele';
$strTableEmpty = 'Ima tabele je prazno!';
$strTableHasBeenDropped = 'Tabela %s je odba�ena';
$strTableHasBeenEmptied = 'Tabela %s je ispra�njena';
$strTableHasBeenFlushed = 'Tabela %s je osve�ena';
$strTableMaintenance = 'Radnje na tabeli';
$strTableOfContents = 'Sadr�aj';
$strTableOptions = 'Opcije tabele';
$strTableStructure = 'Struktura tabele';
$strTableType = 'Tip tabele';
$strTables = '%s tabela';
$strTblPrivileges = 'Privilegije vezane za tabele';
$strTextAreaLength = 'Zbog njehove veli�ine, polje<br />mo�da ne�ete mo�i da izmenite';
$strThai = 'Tajski';
$strTheContent = 'Sadr�aj datoteke je dodat u bazu.';
$strTheContents = 'Podatke sadr�ane u tabeli zameni sa podacima iz datoteke koji imaju identi�ne primarne i jedinstvene (unique) klju�eve.';
$strTheTerminator = 'Separator polja u datoteci.';
$strThisHost = 'Ovaj server';
$strThisNotDirectory = 'Ovo nije direktorijum';
$strThreadSuccessfullyKilled = 'Proces %s je uspe�no prekinut.';
$strTime = 'Vreme';
$strToggleScratchboard = 'Uklju�uje/isklju�uje scratchboard';
$strTotal = 'ukupno';
$strTotalUC = 'Ukupno';
$strTraditionalChinese = 'Tradicionalni kineski';
$strTraffic = 'Saobra�aj';
$strTransformation_image_jpeg__inline = 'Prikazuje umanjenu sliku na koju je mogu�e kliknuti; opcije: �irina, visina u pikselima (�uva originalni odnos)';
$strTransformation_image_jpeg__link = 'Prikazuje link ka ovoj slici (npr. direktno preuzimanje iz BLOB-a).';
$strTransformation_image_png__inline = 'Prika�i JPEG slike na strani';
$strTransformation_text_plain__dateformat = 'Uzima TIME, TIMESTAMP ili DATETIME polje i formatira ga koriste�i lokalni oblik prikazivanja datuma. Prva opcija je ofset (u satima) koji se dodaje vremenskoj oznaci (podrazumevano: 0). Druga opcija je razli�it format datuma prema parametrima koji su dostupni za PHP-ov strftime().';
$strTransformation_text_plain__external = 'SAMO LINUX: Pokre�e eksternu aplikaciju i popunjava podatke u poljima preko standardnog ulaza. Vra�a standardni izlaz aplikacije. Podrazumevano je Tidy, za lep�i prikaz HTML koda. Zbog sigurnosnih razloga, morate ru�no izmeniti datoteku libraries/transformations/text_plain__external.inc.php i dodati alate koje �elite da koristite. Prva opcija je broj programa koje �elite da koristite, a druga su parametri programa. Ako se tre�i parametar postavi na 1 izlaz �e biti konvertovan koriste�i htmlspecialchars() (podrazumevano je 1). Ako je �etvrti parametar postavljen na 1, NOWRAP �e biti dodato �eliji sa sadr�ajem tako da �e izlaz biti prikazan bez izmena. (podrazumevano 1)';
$strTransformation_text_plain__formatted = '�uva originalno formatiranje polja. Escaping se ne vr�i.';
$strTransformation_text_plain__imagelink = 'Prikazuje sliku i link, polje sadr�i naziv datoteke; prva opcija je prefiks kao "http://domain.com/", druga opcija je �irina u pikselima, tre�a je visina.';
$strTransformation_text_plain__link = 'Prikazuje link, polje sadr�i naziv datoteke; prva opcija je prefiks kao "http://domain.com/", druga opcija je naslov za link.';
$strTransformation_text_plain__substr = 'Pokazuje samo deo stringa. Prva opcija je ofset koji defini�e gde po�inje izlaz va�eg teksta (podrazumevano 0). Druga opcija je ofset koji pokazuje koliko �e teksta biti prikazano. Ako je nema, sav preostali tekst �e biti prikazan. Tre�a opcija odre�uje koji �e znaci biti dodati izlazu kada se prika�e podstring (podrazumevano: ...) .';
$strTransformation_text_plain__unformatted = 'Prikazuje HTML kod kao HTML entitete. HTML formatiranje se ne prikazuje.';
$strTruncateQueries = 'Prika�i skra�ene upite';
$strTurkish = 'Turski';
$strType = 'Tip';

$strUkrainian = 'Ukrajinski';
$strUncheckAll = 'nijedno';
$strUnicode = 'Unikod';
$strUnique = 'Jedinstveni';
$strUnknown = 'nepoznat';
$strUnselectAll = 'ni�ta';
$strUpdComTab = 'Molimo pogledajte u dokumentaciji kako se a�urira tabela Column_comments';
$strUpdatePrivMessage = 'A�urirali ste privilegije za %s.';
$strUpdateProfile = 'Promeni profil:';
$strUpdateProfileMessage = 'Profil je promenjen.';
$strUpdateQuery = 'A�uriraj upit';
$strUpgradeMySQL = 'Trebalo bi da unapredite va� MySQL server na verziju %s ili noviju.';
$strUsage = 'Zauze�e';
$strUseBackquotes = 'Koristi \' za ograni�avanje imena polja';
$strUseHostTable = 'Koristi tabelu doma�ina';
$strUseTables = 'Koristi tabele';
$strUseTextField = 'Koristi tekst polje';
$strUseThisValue = 'Koristi ovu vrednost';
$strUser = 'Korisnik';
$strUserAlreadyExists = 'Korisnik %s ve� postoji!';
$strUserEmpty = 'Ime korisnika nije uneto!';
$strUserName = 'Ime korisnika';
$strUserNotFound = 'Izabrani korisnik nije prona�en u tabeli privilegija.';
$strUserOverview = 'Pregled korisnika';
$strUsers = 'Korisnici';
$strUsersDeleted = 'Izabrani korisnici su uspe�no obrisani.';
$strUsersHavingAccessToDb = 'Korisnici koji imaju pristup &quot;%s&quot;';

$strValidateSQL = 'Proveri SQL';
$strValidatorError = 'SQL validator nije mogao da bude pokrenut. Proverite da li su instalirane neophodne PHP ekstenzije opisane u  %sdokumentaciji%s.';
$strValue = 'Vrednost';
$strVar = 'Promenljiva';
$strViewDump = 'Prika�i sadr�aj (shemu) tabele';
$strViewDumpDB = 'Prika�i sadr�aj (shemu) baze';
$strViewDumpDatabases = 'Prika�i sadr�aj (shemu) baze';

$strWebServerUploadDirectory = 'direktorijum za slanje veb servera ';
$strWebServerUploadDirectoryError = 'Direktorijum koji ste izabrali za slanje nije dostupan';
$strWelcome = 'Dobrodo�li na %s';
$strWestEuropean = 'Zapadnoevropski';
$strWildcard = 'd�oker';
$strWindowNotFound = 'Odredi�ni prozor pretra�iva�a nije mogao da bude a�uriran. Mo�da ste zatvorili mati�ni prozor, ili va� pretra�iva� onemogu�ava a�uriranje me�u prozorima zbog sigurnosnih pode�avanja';
$strWithChecked = 'Ozna�eno:';
$strWritingCommentNotPossible = 'Pisanje komentara nije mogu�e';
$strWritingRelationNotPossible = 'Upisivanje relacije nije mogu�e';
$strWrongUser = 'Pogre�no korisni�ko ime/lozinka. Pristup odbijen.';

$strXML = 'XML';

$strYes = 'Da';

$strZeroRemovesTheLimit = 'Napomena: Postavljanje ovih opcija na 0 (nulu) uklanja limite.';
$strZip = '"zipovano"';

$strCreationDates = 'Creation/Update/Check dates';  //to translate
$strCheckOverhead = 'Check overheaded';  //to translate
$strExcelEdition = 'Excel edition';  //to translate
?>
