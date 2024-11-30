<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // TODO : tambahkan minimal 30 buku dengan struktur table berikut
        $books = [
            [
                "title" => "Atomic Habits",
                "publisher" => "Penguin Random House",
                "language" => "English",
                "isbn" => "9780735211292",
                "dimension" => "15.2 x 2.3 x 22.9 cm",
                "weight" => 350, // dalam gram
                "description" => "Panduan praktis untuk mengubah kebiasaan kecil menjadi pencapaian besar.",
                "price" => 100000,
                "image_cover_url" => "images/books/atomic-habbits.jpg",
                "pages" => 352
            ],
            [
                "title" => "The Power of Now",
                "publisher" => "New World Library",
                "language" => "English",
                "isbn" => "9781577314806",
                "dimension" => "14 x 2.3 x 21 cm",
                "weight" => 320, // dalam gram
                "description" => "Tentang pentingnya hidup di masa kini untuk mencapai kedamaian.",
                "price" => 130000,
                "image_cover_url" => "images/books/power-of-now.jpg",
                "pages" => 298
            ],
            [
                "title" => "Di Balik Senja",
                "publisher" => "Pena Nusantara",
                "language" => "Indonesia",
                "isbn" => "978-602-1277-37-9",
                "dimension" => "13 x 19 cm",
                "weight" => 320, // dalam gram
                "description" => "Novel Di Balik Senja ini adalah novel kedua dari tetralogi Gunung Sojol. Lima anak muda yang senang bertualang di alam bebas: Ahmad, Leo, Dino, Anto, Icank, bertarung nasib di Gunung Sojol, untuk mencapai misi nomor satu dan misi nomor dua.",
                "price" => 76500,
                "image_cover_url" => "images/books/Di-Balik-Senja.jpg",
                "pages" => 271
            ],
            [
                "title" => "Ekspedisi Alpha Centauri",
                "publisher" => "Pena Nusantara",
                "language" => "Indonesia",
                "isbn" => "978-602-1277-97-3",
                "dimension" => "148 mm x 210 mm",
                "weight" => 460, // dalam gram
                "description" => "Pada abad ke-25 Indonesia telah menjelma menjadi sebuah negara adidaya yang memimpin dunia dalam kemajuan teknologi. Kemajuan itu telah membawanya menjadi pelopor ekspedisi perdanan ke tata surya bintang lain, yaitu Alpha Centauri. Gayatri adalah salah satu antariksawati yang terpilih dalam ekspedisi yang maha penting itu. Ia adalah seorang pilot pesawat antariksa yang berbakat, namun terobsesi pada petualangan luar angkasa, dan sama sekali tak peduli urusan asmara. Nmaun semuanya berubah Ketika tiba-tiba ia jatuh cinta pada seniornya, Rizki, pada saat dan tempat yang salah. Petualangannya dalam ekspedisi Alpha Centauri pun dibayangi oleh dilemma cintanya yang terlarang. Nasibnya sebagai antariksawati berada di persimpangan jalan Ketika Rizki mengorbankan diri untuk menyelamatkannya dalam sebuah malapetaka di Alpha Centauri.",
                "price" => 98000,
                "image_cover_url" => "images/books/Ekspedisi-Alpha-Centauri_Cover_DP-600x851.jpg",
                "pages" => 397
            ],
            [
                "title" => "Kastel Terpencil Di Dalam Cermin",
                "publisher" => "M&C (MNC)",
                "language" => "Indonesia",
                "isbn" => "9786230305993",
                "dimension" => "13 cm x 19 cm",
                "weight" => 516, // dalam gram
                "description" => "Kokoro merasa terusir dari kelasnya sendiri hingga ia mengurung diri di rumah dan menolak pergi ke sekolah. Pada suatu hari, cermin di dalam kamarnya mengeluarkan cahaya terang. Dan di dalam cermin tersebut ada bangunan misterius yang mirip sebuah kastel. Ada tujuh orang yang juga “diundang” ke sana—mereka yang menolak pergi ke sekolah seperti Kokoro. Untuk apa mereka bertujuh dikumpulkan di kastel? Siapakah sebenarnya sosok gadis bertopeng serigala yang mengundang mereka?.",
                "price" => 77000,
                "image_cover_url" => "images/books/createthumb.jpg",
                "pages" => 496
            ],
            [
                "title" => "Vermilion Rain",
                "publisher" => "Gramedia Pustaka Utama (GPU)",
                "language" => "Indonesia",
                "isbn" => "9786020669724",
                "dimension" => "13 cm x 20 cm",
                "weight" => 316, // dalam gram
                "description" => "Hujan telah turun selama sembilan puluh hari tanpa henti di Desa Bokudi yang terletak di lereng Gunung Morui. Asayana Brahma, ahli meteorologi yang telah beralih profesi menjadi disaster hunter, mendapat kabar tentang fenomena alam tidak biasa itu dari sahabatnya Elang Langit, seorang pakar klimatologi. Elang khawatir jika hujan itu tidak berhenti, maka lereng gunung akan longsor dan mengubur seluruh desa. Terdorong niat untuk menyelamatkan nyawa, Asa berangkat ke desa itu bersama Elang. Ekspedisi itu melibatkan Wicky Simangunsong dari Basarnas, Dito Pati, seorang peneliti geologi, dan Joselyn Eden, dokter utusan Dinas Kesehatan. Mereka punya waktu 6 hari untuk meyakinkan warga desa yang terkenal menutup diri agar mau dievakuasi. Awalnya Asa dan yang lain mengira misi mereka akan berjalan dengan lancar, sampai orang-orang mulai terbunuh secara misterius…",
                "price" => 62300,
                "image_cover_url" => "images/books/9786020669724-550x550h.jpg",
                "pages" => 296
            ],
            [
                "title" => "Polisi Kenangan (The Memory Police)",
                "publisher" => "Gramedia Pustaka Utama (GPU)",
                "language" => "Indonesia",
                "isbn" => "9786020639055",
                "dimension" => "13 cm x 20 cm",
                "weight" => 316, // dalam gram
                "description" => "Penduduk di suatu pulau tak bernama, hidup di bawah kekuasaan rezim yang opresif. Pelan-pelan mereka mengalami amnesia kolektif. Secara berkala benda-benda mulai hilang dari ingatan mereka---bunga, burung, perahu, topi, pita, hal-hal yang tampak sepele. Apa pun yang hilang itu, tidak lagi memiliki makna, benda itu bisa dibakar di kebun, dibuang ke sungai, atau diserahkan kepada Polisi Kenangan. Lalu dengan cepat seisi pulau melupakan keberadaannya. Tetapi ada orang-orang yang tidak lupa, entah kenapa, dan tugas Polisi Kenangan adalah mengatasi orang-orang seperti ini. Ketika seorang novelis muda mendapati editornya terancam akan dibawa pergi oleh Polisi Kenangan, dia berupaya menyelamatkan sang editor. Editor itu adalah satu dari segelintir orang yang tidak melupakan, dan makin lama semakin sulit baginya untuk menyembunyikan hal ini. Siapa yang tahu, apa yang akan hilang berikutnya? Polisi Kenangan adalah kisah yang indah dan sulit dilupakan tentang kekuatan kenangan dan trauma akibat kehilangan.",
                "price" => 65100,
                "image_cover_url" => "images/books/Yoko Ogawa-550x550h.jpg",
                "pages" => 296
            ],
            [
                "title" => "To Kill A Kingdom",
                "publisher" => "Mizan Fantasi",
                "language" => "Indonesia",
                "isbn" => "9786024411329",
                "dimension" => "13 cm x 20 cm",
                "weight" => 316, // dalam gram
                "description" => "Masalahnya, Putri Lira menginginkan banyak pangeran … untuk diambil jantungnya. Sebagai siren, Lira yakin bahwa semakin banyak jantung manusia yang dikumpulkan, dia akan semakin kuat. Lira harus membuktikan dirinya pantas mewarisi takhta ibunya, sang Ratu Laut yang kejam dan tak kenal ampun. Sial bagi Lira, target berikutnya adalah Pangeran Elian yang terkenal sebagai kapten kapal bajak laut pemburu siren. Bagaimana cara dia mendekati pangeran yang satu ini? Elian yakin bahwa sebelum Ratu Laut dibunuh dan seluruh siren musnah, bangsa manusia akan terus dicekam ketakutan. Ketika berlayar dalam misi terbarunya, Elian menyelamatkan seorang gadis yang terapung di tengah lautan. Gadis itu mengaku punya informasi penting terkait senjata untuk mengalahkan Ratu Laut. Bisakah Elian memercayainya, atau perdamaian dunia hanya sekadar mimpi?.",
                "price" => 82800,
                "image_cover_url" => "images/books/To Kill a Kingdom-550x550h.jpg",
                "pages" => 296
            ],
            [
                "title" => "Sunyaruri",
                "publisher" => "Bukune",
                "language" => "Indonesia",
                "isbn" => "9786022202684",
                "dimension" => "14 cm x 20 cm",
                "weight" => 316, // dalam gram
                "description" => "Ke mana perginya mereka, sahabat-sahabat hantu kecilku yang lagi-lagi sibuk mencari teman-teman baru? Namun, sesal terasa begitu menyesakkan dada, tatkala kuingat lagi bahwa semua ini karena ulahku. Seandainya tak kuceritakan bagaimana kisah kami. Seandainya tak kugambarkan sosok Peter yang jahil, William yang bijaksana, Hans dan Hendrick yang periang, Janshen yang menggemaskan. Pasti kalian tak akan memanggil-manggil nama mereka di tiap malam dan berharap datang dalam mimpi yang indah.",
                "price" => 55440,
                "image_cover_url" => "images/books/Sunyaruri NC-550x550h.png",
                "pages" => 196
            ],
            [
                "title" => "It's Okay to Not Be Okay 1: Anak Lelaki yang Penuh Mimpi Buruk",
                "publisher" => "M&C (MNC)",
                "language" => "Indonesia",
                "isbn" => "9786230306747",
                "dimension" => "15 cm x 21 cm",
                "weight" => 44, // dalam gram
                "description" => "Mimpi-mimpi buruk itu terus datang mengganggu tidurku. Andai mimpi buruk itu lenyap, pasti hidupku akan bahagia. Mudah. Sungguhkah demikian?",
                "price" => 52500,
                "image_cover_url" => "images/books/9786230306747-550x550w.jpg",
                "pages" => 24
            ],
            [
                "title" => "11:11 - Albuk #2",
                "publisher" => "MediaKita",
                "language" => "Indonesia",
                "isbn" => "9789797945695",
                "dimension" => "13 cm x 20 cm",
                "weight" => 316, // dalam gram
                "description" => "Bukan seberapa lama hidup ini dihitung, tetapi seberapa berarti kita menghabiskannya.",
                "price" => 63360,
                "image_cover_url" => "images/books/albuk fiersa-550x550h.jpg",
                "pages" => 308
            ],
            [
                "title" => "Dongeng-Dongeng yang Tak Utuh",
                "publisher" => "MediaKita",
                "language" => "Indonesia",
                "isbn" => "9789797945794",
                "dimension" => "13 cm x 19 cm",
                "weight" => 316, // dalam gram
                "description" => "",
                "price" => 47520,
                "image_cover_url" => "images/books/dongeng yang tak utuh-550x550h.jpg",
                "pages" => 168
            ],
            [
                "title" => "The Book Of Almost",
                "publisher" => "MediaKita",
                "language" => "Indonesia",
                "isbn" => "9789797945572",
                "dimension" => "13 cm x 19 cm",
                "weight" => 230, // dalam gram
                "description" => "Tak ada yang lebih menyakitkan dalam jatuh cinta kecuali kata hampir. Aku hampir merasa kau yang selama ini kucari. Kau hampir membuatku berhenti berlari. Mesti pada akhirnya, kita berdua hanya sebatas hampir; hampir seperti sepasang kekasih. Memang, melupakan adalah fase terberat dari perpisahan. Karenanya, hati hanya perlu mengikhlaskan, bukan melupakan.",
                "price" => 47520,
                "image_cover_url" => "images/books/The Book of Almost-550x550h.jpg",
                "pages" => 252
            ],
            [
                "title" => "Bicara Itu Ada Seninya",
                "publisher" => "Bhuana Ilmu Populer (BIP)",
                "language" => "Indonesia",
                "isbn" => "9786024553920",
                "dimension" => "14 cm x 20 cm",
                "weight" => 350, // dalam gram
                "description" => "TAHUKAH ANDA BAHWA BERBICARA ITU ADA SENINYA? Ketika komunikasi menjadi hal yang penting untuk bersaing, pakar komunikasi Oh Su Hyang mengeluarkan buku yang sangat berarti. Selain berisi tentang pengalaman peningkatan diri, buku ini juga memuat berbagai konten mengenai teknik komunikasi, persuasi, dan negosiasi. Lalu bagaimana cara berbicara yang baik? Apakah berbicara dengan artikulasi yang jelas? Atau berbicara tanpa mengambil tarikan napas? Tidak! Sebuah ucapan yang bisa disebut baik adalah yang bisa menggetarkan hati. Ucapan seorang juara memiliki daya tarik tersendiri. Ucapan pemandu acara memiliki kemampuan menghidupkan suasana dan kekuatan kalimatnya yang terus terang. Anda harus pandai berbicara untuk menunjukkan diri Anda kepada lawan bicara dalam kehidupan sosial. Orang yang berbicara dengan mahir akan menjadi lebih maju daripada yang lainnya.",
                "price" => 71280,
                "image_cover_url" => "images/books/9786024553920-550x550h.jpg",
                "pages" => 256
            ],
            [
                "title" => "Hyouka 1 : Hyouka",
                "publisher" => "Haru",
                "language" => "Indonesia",
                "isbn" => "9786026383396",
                "dimension" => "13 cm x 19 cm",
                "weight" => 316, // dalam gram
                "description" => "Oreki Hotaro adalah pemuda hemat energi. Mottonya adalah, “Kalau tidak perlu dikerjakan, lebih baik tidak usah dikerjakan. Tapi kalau harus dikerjakan,lakukan dengan praktis.” Hanya saja, semua itu berubah saat dia terpaksa bergabung dengan Klub Sastra Klasik. Chitanda Eru—gadis dengan rasa penasaran yang tinggi—mengubah hari-hari Hotaro, dan dia harus memecahkan misteri demi misteri yang terjadi di sekitar mereka. Gara-gara Chitanda, mereka dihadapkan pada kasus 33 tahun yang lalu. Hanya saja, petunjuk mereka hanyalah sebuah antologi berjudul Hyouka.",
                "price" => 49400,
                "image_cover_url" => "images/books/hyouka-550x550h.jpg",
                "pages" => 244
            ],
            [
                "title" => "Hyouka 2 : Credit Roll of The Fool",
                "publisher" => "Haru",
                "language" => "Indonesia",
                "isbn" => "9786026383501",
                "dimension" => "13 cm x 19 cm",
                "weight" => 316, // dalam gram
                "description" => "Oreki Hotaro lagi-lagi terseret oleh rasa ingin tahu Chitanda Eru. Melawan keinginannya, kali ini Hotaro harus menebak penyelesaian skenario naskah film misteri kelas 2-F yang akan ditayangkan saat Festival Kanya nanti. Seorang siswa terjebak dalam kamar tertutup bangunan terbengkalai, mati setelah tangannya terpotong. Namun, siapa yang membunuh? Bagaimana caranya? Film itu selesai begitu saja tanpa penjelasan. Hotaro-lah yang bertugas untuk menebak siapa dan bagaimana trik pembunuhan itu dilakukan. Namun, hanya itukah masalahnya? Atau ada sesuatu yang lebih besar dari sekadar menyelesaikan skenario film?",
                "price" => 53300,
                "image_cover_url" => "images/books/Hyouka 2-550x550h.jpg",
                "pages" => 260
            ],
            [
                "title" => "Malam Ini Aku Tidur Di Matamu",
                "publisher" => "Gramedia Widiasarana Indonesia (Grasindo)",
                "language" => "Indonesia",
                "isbn" => "9786023756315",
                "dimension" => "13 cm x 20 cm",
                "weight" => 150, // dalam gram
                "description" => "Mata waktu, mata sunyi: memanggil, menelan. Ceruk cinta yang haus warna. Ceruk perempuan. Malam ini aku akan tidur di matamu. Daun-daun celana berguguran di senja tersayang. Di senja tersayang daun-daun celana berguguran. Tangan kecil hujan menjatuhkan embun ke celah bibirmu, meraba demam pada lehermu, dan dengan takzim membuka kancing bajumu. Aduh sayang, jarak itu sebenarnya tak pernah ada. Pertemuan dan perpisahan dilahirkan oleh perasaan. Tinggallah air mata yang menetes pelan ke dalam segelas bir yang menempel pada dada yang setengah terbuka, setengah merdeka. Aku telah menguburkan saudaramu di sebuah rimba. Karena tak kutahu namanya, kutandai saja ia dengan tulisan KORBAN NOMOR 65.",
                "price" => 31500,
                "image_cover_url" => "images/books/9786023756315-550x550h.jpg",
                "pages" => 136
            ],
            [
                "title" => "Orang Aneh",
                "publisher" => "Narasi",
                "language" => "Indonesia",
                "isbn" => "9786020639055",
                "dimension" => "13 cm x 20 cm",
                "weight" => 150, // dalam gram
                "description" => "Bayangkan, Anda yang sebenarnya tidak bersalah dalam sebuah kasus, tiba-tiba dijatuhi vonis hukuman mati oleh pengadilan. Sisa hidup Anda terhenti di kamar penjara yang pengap, menanti hari penentuan ajal. Tak ada cinta, tak ada senyum kekasih. Mungkin saat itu Anda akan mengutuk dunla atau menuntut keadilan Tuhan. Tapi tidak demikian dengan Mersault, tokoh utama dalam novel ini. Baginya, orang yang dijatuhi hukuman mati lebih bebas daripada mereka yang melakukan bunuh karena mereka telah menanggalkan kehidupannya sendiri. Orang Aneh adalah novel terbaik Albert Camus yang memantulkan keterasingan dan absurditas manusia. Lewat karakter Mersault, Camus mencitrakan dirinya: citra absurditas dan paham eksistensialisme!",
                "price" => 65100,
                "image_cover_url" => "images/books/9789791684699-550x550h.jpg",
                "pages" => 168
            ],
            [
                "title" => "Elegi",
                "publisher" => "Gramedia Widiasarana Indonesia (Grasindo)",
                "language" => "Indonesia",
                "isbn" => "9786023757909",
                "dimension" => "13 cm x 20 cm",
                "weight" => 130, // dalam gram
                "description" => "Elegi memuat 13 cerita pendek dan 6 fragmen yang berkisah tentang kepergian, kehilangan, dan kematian dalam beragam caranya. Cerita pendek dan fragmen dalam kumpulan ini bertutur tentang kehidupan orang-orang yang merasa bosan di perkotaan maupun kehidupan orang-orang yang merasa binasa di pedesaan. Beberapa cerita juga bereksperimen dengan hal-hal yang ganjil. Serta sekian cerita dengan lincah menggerakkan kejiwaan para tokohnya lewat sudut pandang orang-orang yang dianggap gila oleh masyarakat hingga menawarkan kisah futuristik di masa depan dan mengajak pembaca bergerak maju-mundur dalam ruang dan waktu bersama suatu dinasti keluarga superkaya yang hadir dari masa depan. ",
                "price" => 41300,
                "image_cover_url" => "images/books/9786023757909-550x550.jpg",
                "pages" => 176
            ],
            [
                "title" => "Penelusuran Benang Merah (A Study in Scarlet)",
                "publisher" => "Gramedia Pustaka Utama (GPU)",
                "language" => "Indonesia",
                "isbn" => "9786020631653",
                "dimension" => "13 cm x 20 cm",
                "weight" => 316, // dalam gram
                "description" => "Penelusuran Benang Merah merupakan buku pertama dalam seri Sherlock Holmes dan mengisahkan perkenalan dr. Watson dengan sang detektif. Sang dokter yang ketika itu belum mengetahui profesi Holmes, pada awalnya dibuat bingung dengan keeksentrikan pria itu serta kemampuannya yang unik. Holmes sangat pandai dalam ilmu deduksi dan mampu menebak keadaan seseorang hanya dalam sekali pandang. Para tamu yang mengunjungi rumah sewaan mereka di Baker Street pun berasal dari berbagai kelas sosial, mulai dari bangsawan sampai portir. Holmes juga mahir bermain biola, tetapi lebih sering menggeseknya sembarang. Dia bisa tampak sangat bersemangat, namun di lain waktu tampak merenung dengan tatapan kosong seperti orang kecanduan narkotika.",
                "price" => 45500,
                "image_cover_url" => "images/books/9786020631653-550x550h.jpg",
                "pages" => 160
            ],
            [
                "title" => "Kembalinya Sherlock Holmes (The Return of Sherlock Holmes)",
                "publisher" => "Gramedia Pustaka Utama (GPU)",
                "language" => "Indonesia",
                "isbn" => "9786020636221",
                "dimension" => "13 cm x 20 cm",
                "weight" => 420, // dalam gram
                "description" => "Kembalinya Sherlock Holmes",
                "price" => 65100,
                "image_cover_url" => "images/books/9786020636221-550x550h.jpg",
                "pages" => 400
            ],
            [
                "title" => "Confessions",
                "publisher" => "Haru",
                "language" => "Indonesia",
                "isbn" => "9786025385889",
                "dimension" => "13 cm x 19 cm",
                "weight" => 316, // dalam gram
                "description" => "Moriguchi Yuko adalah seorang guru SMP. Saat anaknya yang berusia 4 tahun ditemukan meninggal, semua orang mengira itu cuma kecelakaan nahas. Akan tetapi, Moriguchi yakin anaknya dibunuh oleh dua dari anak didiknya. Karena itu, dia tidak akan membiarkan kedua anak itu bebas. Dia ingin membalas dendam, dan balas dendam yang dia lakukan itu hanyalah awal dari sebuah mimpi buruk....",
                "price" => 65100,
                "image_cover_url" => "images/books/9786025385889-550x550h.jpg",
                "pages" => 300
            ],
            [
                "title" => "TeenLit: Mawar Merah#4: Masquerade",
                "publisher" => "Gramedia Pustaka Utama (GPU)",
                "language" => "Indonesia",
                "isbn" => "9786020630700",
                "dimension" => "13 cm x 20 cm",
                "weight" => 125, // dalam gram
                "description" => "Rachel mendapat tugas menyusup ke dalam Vortex, sindikat kejahatan internasional yang menjadi sumber dari berbagai peristiwa terorisme di seluruh dunia dalam beberapa tahun terakhir. Tugas itu tidak mudah, karena organisasi ini sangat tertutup dan tidak menerima anggota baru. Untuk mendapatkan kepercayaan dan mendekati para pemimpin Vortex, Rachel harus mendapatkan apa yang diinginkan oleh organisasi itu, yaitu sebuah senjata rahasia militer Rusia bernama Gorynych yang disimpan di sebuah tempat dengan penjagaan sangat ketat dan hampir mustahil ditembus. Sementara itu, seseorang dari masa lalu Rachel menginginkan kematian gadis itu. Beberapa kali nyawa Rachel hampir melayang. Belum lagi, Vortex ternyata juga ingin membunuh Rachel demi mendapatkan Gorynych yang dipegang oleh gadis itu. Rachel berada di persimpangan jalan. Dia harus memilih antara menyelamatkan dirinya sendiri atau melanjutkan tugasnya. Apalagi setelah dia tahu Vortex berhubungan dengan berbagai peristiwa teror di Indonesia, dan menghancurkan organisasi kejahatan tersebut berarti menyelamatkan bangsa dan negaranya.",
                "price" => 57400,
                "image_cover_url" => "images/books/9786020630700-550x550h.png",
                "pages" => 244
            ],
            [
                "title" => "TeenLit: Mawar Merah#3: Matahari",
                "publisher" => "Gramedia Pustaka Utama (GPU)",
                "language" => "Indonesia",
                "isbn" => "9786020310756",
                "dimension" => "13 cm x 20 cm",
                "weight" => 130, // dalam gram
                "description" => "Riva menghilang. Rachel yang telah pulih ingatannya mencoba mencari sahabatnya itu. Tidak mudah, karena Riva selalu berpindah-pindah demi menghindari kejaran para pembunuh lain yang terus memburunya. Dengan berbagai cara Rachel terus mencari keberadaan Riva, bahkan sampai membuat dia menunda untuk bertemu dengan mamanya. Di sisi lain, Matahari terus beraksi membunuh para pembunuh mantan anggota SPIKE. Sosoknya yang misterius membuat semua orang penasaran, termasuk Rachel. Kelompok Oni juga terus melancarkan aksinya. Bukan hanya memburu Riva, mereka juga mulai membunuh para pimpinan Yakuza, kelompok kriminal terbesar di Jepang. Hal yang membuat pihak kepolisian setempat kalang kabut dan kuatir jika Yakuza mengadakan aksi balasan. Jika hal itu sampai terjadi, bakal ada banjir darah di Jepang, dan itu bisa berpengaruh pada situasi politik dan ekonomi negara matahari terbit tersebut. Rachel harus bisa menemukan Riva dan mencegah perang terbuka antara kelompok Oni dan Yakuza sebelum terlambat. Dia juga harus bisa mengungkap rahasia besar kelompok Oni, termasuk menemukan dalang di balik semua kejadian ini.",
                "price" => 62300,
                "image_cover_url" => "images/books/9786020310756-550x550h.png",
                "pages" => 384
            ],
            [
                "title" => "TeenLit: Mawar Merah#2: Metamorfosis",
                "publisher" => "Gramedia Pustaka Utama (GPU)",
                "language" => "Indonesia",
                "isbn" => "9786020310763",
                "dimension" => "13 cm x 20 cm",
                "weight" => 316, // dalam gram
                "description" => "Riva mencoba menata kembali kehidupannya yang sempat berantakan karena kehadiran Elsa. Dia kembali kuliah, bahkan mulai mengerjakan tugas akhir. Tapi kembali serentetan peristi wa aneh terjadi. Dimulai dari putusnya kontak antara Riva dan Arga yang sedang magang di Jerman secara ti ba-ti ba, tewasnya kedua orangtua Riva, dan puncaknya saat dia dikejar-kejar orang yang akan membunuhnya. Untung ada yang menyelamatkan Riva. Dan bersama penolongnya, Riva mencari tahu kenapa dia akan dibunuh. Apakah ini berhubungan dengan tewasnya kedua orangtua Riva? Atau berhubungan dengan Rachel, yang setelah enam bulan menghilang masih juga menimbulkan spekulasi di antara para agen rahasia yang mengejarnya? Riva nggak tahu bahwa dia sedang berhadapan dengan salah satu organisasi kejahatan paling tua di seluruh dunia yang sangat menginginkan kemati annya. Dan dia harus menghadapi itu semua tanpa bantuan orang-orang yang sangat disayanginya.",
                "price" => 48100,
                "image_cover_url" => "images/books/9786020310763-550x550h.png",
                "pages" => 296
            ],
            [
                "title" => "TeenLit: Mawar Merah#1: Mosaik",
                "publisher" => "Gramedia Pustaka Utama (GPU)",
                "language" => "Indonesia",
                "isbn" => "9786020310688",
                "dimension" => "13 cm x 20 cm",
                "weight" => 316, // dalam gram
                "description" => "Riva tertarik pada sifat teman sekelasnya, anak baru bernama Elsa. Kontras dengan Riva yang suka bergaul dan punya banyak teman, Elsa punya sifat tertutup, dan hampir dibilang nggak pernah bergaul dengan teman-teman di Universitas Prati sta. Kegiatan sehari-hari cewek ti nggi berkacamata dan berambut lurus panjang ini di kampus selain belajar adalah menyendiri, sambil membaca novel-novel impor favoritnya. Tapi bagi Riva, sifat Elsa yang tertutup itulah yang menarik perhati annya. Riva merasa Elsa menyimpan misteri, dan ia tertarik untuk mengungkap misteri itu.",
                "price" => 55300,
                "image_cover_url" => "images/books/9786020310688-550x550h.png",
                "pages" => 296
            ],
            [
                "title" => "City Lite: Secangkir Kopi dan Pencakar Langit",
                "publisher" => "Elex Media Komputindo",
                "language" => "Indonesia",
                "isbn" => "9786020287591",
                "dimension" => "12 cm x 19 cm",
                "weight" => 324, // dalam gram
                "description" => "Satrya nggak munafik, first impression seorang laki-laki terhadap perempuan pasti tampilan fisik dulu sebelum inner beauty. Namun teori itu terbantahkan ketika Satrya tanpa sengaja meminta bantuan Athaya, seorang IT system analyst yang begitu passionate dengan profesinya, dan juga dijaga habis-habisan sama cowok-cowok IT yang pada sayang sama “dedek” mereka ini. Sementara Athaya diam-diam sudah lama memendam rasa pada Ghilman. Masalahnya ... Ghilman sudah punya pacar. Di tengah-tengah business district nomor satu Jakarta, kopi, rokok, meeting, report, after office hour, cowok-cowok rapi dengan kemeja slim fit, kaki jenjang cewek-cewek dengan heels tujuh sentimeter, ada sepotong kisah cinta segitiga antara Athaya, Satrya, dan Ghilman. Siapakah yang akan Athaya pilih? Satrya yang menarik dan fun atau Ghilman yang baik hati serta gesture-nya yang selalu bikin jantung Athaya deg-degan? Benarkan dicintai rasanya lebih menyenangkan daripada mencintai?",
                "price" => 70000,
                "image_cover_url" => "images/books/9786020287591-550x550h.jpg",
                "pages" => 304
            ],
            [
                "title" => "MetroPop: Mencari Simetri",
                "publisher" => "Gramedia Pustaka Utama (GPU)",
                "language" => "Indonesia",
                "isbn" => "9786020629360",
                "dimension" => "13 cm x 20 cm",
                "weight" => 250, // dalam gram
                "description" => "Sudah enam tahun April menyukai Armin, tetapi dia tidak bisa mencerna apa yang sebenarnya terjadi di antara mereka. Pacar bukan, sekadar teman juga bukan. Menyebalkan. Menjelang usia 29, April kehilangan arah. Ia memiliki karier yang nyaman tapi tidak bisa dibanggakan. Saat ingin hang out, kebanyakan temannya sudah sibuk membangun keluarga masing-masing. Bahkan kemunculan Lukman yang menawarkan hubungan serius tak mampu menimbulkan percikan rasa di hatinya. Terlebih lagi, ayahnya mulai bersikap aneh dengan terus-menerus melupakan hal sepele. Keseimbangan hidup seperti apa yang April cari? Balasan cinta dari Armin atau kemapanan bersama Lukman? Dapatkah dia menemukannya? -",
                "price" => 52500,
                "image_cover_url" => "images/books/9786020629360-550x550h.jpg",
                "pages" => 240
            ],
            [
                "title" => "Laut Bercerita",
                "publisher" => "Kepustakaan Populer Gramedia (KPG))",
                "language" => "Indonesia",
                "isbn" => "9786024246945",
                "dimension" => "13 cm x 20 cm",
                "weight" => 350, // dalam gram
                "description" => "Laut Bercerita, novel terbaru Leila S. Chudori, bertutur tentang kisah keluarga yang kehilangan, sekumpulan sahabat yang merasakan kekosongan di dada, sekelompok orang yang gemar menyiksa dan lancar berkhianat, sejumlah keluarga yang mencari kejelasan makam anaknya, dan tentang cinta yang tak akan luntur.",
                "price" => 65500,
                "image_cover_url" => "images/books/9786024246945-550x550h.jpg",
                "pages" => 400
            ],
            [
                "title" => "Aroma Karsa",
                "publisher" => "Bentang Pustaka",
                "language" => "Indonesia",
                "isbn" => "9786022914631",
                "dimension" => "13 cm x 20 cm",
                "weight" => 550, // dalam gram
                "description" => "Dari sebuah lontar kuno, Raras Prayagung mengetahui bahwa Puspa Karsa yang dikenalnya sebagai dongeng, ternyata tanaman sungguhan yang tersembunyi di tempat rahasia. Obsesi Raras memburu Puspa Karsa, bunga sakti yang konon mampu mengendalikan kehendak dan cuma bisa diidentifikasi melalui aroma, mempertemukannya dengan Jati Wesi. Jati memiliki penciuman luar biasa. Di TPA Bantar Gebang, tempatnya tumbuh besar, ia dijuluki si Hidung Tikus. Dari berbagai pekerjaan yang dilakoninya untuk bertahan hidup, satu yang paling Jati banggakan, yakni meracik parfum. Kemampuan Jati memikat Raras. Bukan hanya mempekerjakan Jati di perusahaannya, Raras ikut mengundang Jati masuk ke dalam kehidupan pribadinya. Bertemulah Jati dengan Tanaya Suma, anak tunggal Raras, yang memiliki kemampuan serupa dengannya. Semakin jauh Jati terlibat dengan keluarga Prayagung dan Puspa Karsa, semakin banyak misteri yang ia  temukan, tentang dirinya dan masa lalu yang tak pernah ia tahu.",
                "price" => 128800,
                "image_cover_url" => "images/books/Aroma Karsa-550x550h.jpg",
                "pages" => 724
            ],

        ];
        
        foreach($books as $book){
            Book::create($book);
        }
    }
}
