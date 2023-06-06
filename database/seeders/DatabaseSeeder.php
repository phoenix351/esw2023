<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $array_users = [
            [
                'nik' => '7101316011830001', 'id_sobat' => '710122030003',    'name' => 'Lulu erawaty', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], ['nik' => '7101122510780211', 'id_sobat' => '710122010005',    'name' => 'ERLIY MANOPPO', 'posisi' => 'Pemeriksa Lapangan Sensus'], [
                'nik' => '7101146407770301', 'id_sobat' => '710122010004',    'name' => 'Sarini Simbala', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101126007850213', 'id_sobat' => '710122010010',    'name' => 'DEWI YULI DILAPANGA', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101125707900001', 'id_sobat' => '710122010012',    'name' => 'Susi indrianingsi potabuga', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101195505760301', 'id_sobat' => '710122030040',    'name' => 'Siti Marwa Ginoga', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101121709730211', 'id_sobat' => '710122010014',    'name' => 'Josias pontoh', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101206310740301', 'id_sobat' => '710122040004',    'name' => 'Stenly Berty Manumpil', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101095002010213', 'id_sobat' => '710122020007',    'name' => 'Frisca Tiara Iskandar', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7174015712950001', 'id_sobat' => '710122030019',    'name' => 'SUNDARI SINDRA DONDO', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101106910810301', 'id_sobat' => '710122090153',    'name' => 'Riri Evans Okay', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101225003000301', 'id_sobat' => '710122030043',    'name' => 'INDI WIDIA NGODU', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101100503690301', 'id_sobat' => '710122030033',    'name' => 'Ardi Tuuk', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7174021505970001', 'id_sobat' => '710122030041',    'name' => 'FANY YURIANSYAH PODOMI', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7174044205990001', 'id_sobat' => '710122050006',    'name' => 'Inggrid Z. Mandagi', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7403272802940002', 'id_sobat' => '710122060009',    'name' => 'Flavianus Deu', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101105804950305', 'id_sobat' => '710122090064',    'name' => 'Steviena V. Nayoan', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101131404910001', 'id_sobat' => '710123050015',    'name' => 'Ilham Ilahude', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7174040707750001', 'id_sobat' => '710122030025',    'name' => 'Stenly Ch. Tangkere', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101220309000301', 'id_sobat' => '710122090203',    'name' => 'Lutfianda Saputra Ismail', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7174011805910001', 'id_sobat' => '710122090197',    'name' => 'Edo eka putra mamonto', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101196106970301', 'id_sobat' => '710122090140',    'name' => 'Fauzia Mokodongan', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7171044810950051', 'id_sobat' => '710122020016',    'name' => 'RAHMI SRI SOFIYAH AMU', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101101010820304', 'id_sobat' => '710122020025',    'name' => 'Stenly Bullu', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101105004880002', 'id_sobat' => '710122090243',    'name' => 'Rati Aprilia Mamonto', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101116705910301', 'id_sobat' => '710122030028',    'name' => 'Meilina Pranandari', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101207112750001', 'id_sobat' => '710122030015',    'name' => 'Sulasmi mokodompit', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101052111710001', 'id_sobat' => '710122030018',    'name' => 'Yusuf Darise', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101096104900211', 'id_sobat' => '710122030035',    'name' => 'Ria Anggita Potabuga', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101142510960301', 'id_sobat' => '710122010007',    'name' => 'JULVAN KARNAIN MODEONG', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101096602900211', 'id_sobat' => '710122040001',    'name' => 'Vanny ugul', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101094108000211', 'id_sobat' => '710122030008',    'name' => 'Anastasya maharani potabuga', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7174036601940001', 'id_sobat' => '710122030017',    'name' => 'Marwia S. Ilahude', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101105009770301', 'id_sobat' => '710122090133',    'name' => 'Syulce Kembuan', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102080805740001', 'id_sobat' => '710222020082',    'name' => 'Melky Rio Wowor', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102115512720002', 'id_sobat' => '710222030002',    'name' => 'Fenny Irma Paula Wangko', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7108156612770001', 'id_sobat' => '710222030022',    'name' => 'Kristmas Dessy Silvia Raintung', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102026312810002', 'id_sobat' => '710222030046',    'name' => 'Mellanny Kumaseh', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102104802780002', 'id_sobat' => '710222030006',    'name' => 'DEYBI FRANCIN MANOPO', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102021005890001', 'id_sobat' => '710222030005',    'name' => 'Riko Gani', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102026507780003', 'id_sobat' => '710222030011',    'name' => 'Angleen M tombokan', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102135412740002', 'id_sobat' => '710222030026',    'name' => 'Jofieta Grace Defni Kukus', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102115511720001', 'id_sobat' => '710222090389',    'name' => 'Nora Nansi Djohar', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102066411900001', 'id_sobat' => '710222020096',    'name' => 'FRISKILA NADINA GERUNGAN', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102165402750001', 'id_sobat' => '710222030010',    'name' => 'Vera Feronika Guilermo', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102091004710001', 'id_sobat' => '710222020054',    'name' => 'Royke Rokki Runtulalo', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102132005920002', 'id_sobat' => '710222020078',    'name' => 'RAFAEL MILANO EDUARD WALLAH', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102070507990001', 'id_sobat' => '710222020047',    'name' => 'Jovan Axel Kawengian', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102101902780001', 'id_sobat' => '710222020015',    'name' => 'Venti Irwan Melsen Manampiring', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102066709800001', 'id_sobat' => '710222030018',    'name' => 'Graice Joice Tarandung', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102057105870002', 'id_sobat' => '710222090006',    'name' => 'Milfian Priscilla Koloay', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102125606970001', 'id_sobat' => '710222090039',    'name' => 'Elluissa Rosye Ruru', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102041404840001', 'id_sobat' => '710222090141',    'name' => 'Albert Adrian Korompis', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102045608850001', 'id_sobat' => '710222090151',    'name' => 'ALVALIA SILVIA ONGGOH', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102136006030002', 'id_sobat' => '710222020003',    'name' => 'MONICA BEARBY MAINDOKA', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102170701920001', 'id_sobat' => '710223030011',    'name' => 'Jerial Hendra reppi', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102045002770001', 'id_sobat' => '710222090180',    'name' => 'Vera Tilaar', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102185012920001', 'id_sobat' => '710222090111',    'name' => 'Angel Gracely Kemur Putong', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102046210720001', 'id_sobat' => '710222090175',    'name' => 'Yetty Olina Ponggawa', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102100410790001', 'id_sobat' => '710223030033',    'name' => 'Revelino Jersinho Toar', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102054212900002', 'id_sobat' => '710222090078',    'name' => 'Meyland Korengkeng', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102154107990003', 'id_sobat' => '710222090018',    'name' => 'Indah Pangkey', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7103062703880001', 'id_sobat' => '710222030012',    'name' => 'Fransisca dona manapa', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102122012960001', 'id_sobat' => '710222090091',    'name' => 'Rinaldi Imanuel Pioh', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102102903910001', 'id_sobat' => '710222090105',    'name' => 'FRISKI MARSEL POLUAN', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102120102800001', 'id_sobat' => '710222030032',    'name' => 'Ferna Yandi Assa', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7171076402970003', 'id_sobat' => '710223030015',    'name' => 'Ristra Selly Suoth S.IP', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102064708960001', 'id_sobat' => '710222090426',    'name' => 'Ahgnes Olivya Tryfosa Sagemba', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102136411830001', 'id_sobat' => '710222090211',    'name' => 'Nelly Palantung', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102082108960001', 'id_sobat' => '710222090244',    'name' => 'Reza Gerry Barten Mowoka', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102101805890001', 'id_sobat' => '710223030026',    'name' => 'RICO FEINEL MIRAH', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102045101780001', 'id_sobat' => '710222030001',    'name' => 'Veiny J Tembesi', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102031110920001', 'id_sobat' => '710222090023',    'name' => 'Kingly Tairas', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101101707910301', 'id_sobat' => '710222090466',    'name' => 'Yacsen Roboth', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102146704710001', 'id_sobat' => '710222090390',    'name' => 'Bernadeth lumi', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7103120112870001', 'id_sobat' => '710322050008',    'name' => 'Christian Hendriko Garing', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7103170902640301', 'id_sobat' => '710322030007',    'name' => 'Ferdinand Tangkabiringan', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7103254408990000', 'id_sobat' => '710322050007',    'name' => 'Candra Nain Hapantenda', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7103120704900001', 'id_sobat' => '710322090002',    'name' => 'Charly Angel Tatontos', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7103100206820003', 'id_sobat' => '710322040004',    'name' => 'Johny steven manoppo', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7103172101840301', 'id_sobat' => '710322020001',    'name' => 'YAN FREDRIK WELLIAN PADANG', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7104087101970002', 'id_sobat' => '710422030003',    'name' => 'Pirlianty Bella Petupetu', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7104112202890001', 'id_sobat' => '710422030043',    'name' => 'Kalpin T. H. Kahosadi', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7104084704960001', 'id_sobat' => '710422090045',    'name' => 'Riani Salahongga Timpalen', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7106024902900001', 'id_sobat' => '710522020043',    'name' => 'Fiergi Valentine Maramis', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7105035606870001', 'id_sobat' => '710522020020',    'name' => 'Pingkan M Kolopita', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7105026706970001', 'id_sobat' => '710522020021',    'name' => 'Veronita Langi SE', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7105186001860001', 'id_sobat' => '710522030028',    'name' => 'Maya lonteng', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7105160810690001', 'id_sobat' => '710522030041',    'name' => 'Mahmud Mashanafi', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7171052207950002', 'id_sobat' => '710522090135',    'name' => 'henokh kurniawan astono', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7105196006910002', 'id_sobat' => '710522110001',    'name' => 'Swyti Juwita Suawa', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7105161804940002', 'id_sobat' => '710522020003',    'name' => 'ALVERO RIVANDO SUOTH', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7105121507720002', 'id_sobat' => '710522030024',    'name' => 'Dehan Ronny Mokalu', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7105121908890001', 'id_sobat' => '717322030036',    'name' => 'Greisita Krisilia Posumah', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7571056201820001', 'id_sobat' => '710522020049',    'name' => 'Rimah Kelly Christiani Mamesah', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7105071511740001', 'id_sobat' => '710522020047',    'name' => 'Dolly siwu', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7105122302840001', 'id_sobat' => '710522020029',    'name' => 'Frangky fari monintja', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7105212304790001', 'id_sobat' => '710522020045',    'name' => 'Alfian F Mokoagouw', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7105026309940004', 'id_sobat' => '710522020019',    'name' => 'Elisabeth veronica dayana makaenas', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7105220711910001', 'id_sobat' => '710522030046',    'name' => 'REGI PUNUH', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7102030204890002', 'id_sobat' => '710522050013',    'name' => 'VICKY VANDY LUKAS', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7105016106010001', 'id_sobat' => '710522030042',    'name' => 'Arsista Tololiu', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7105015308760001', 'id_sobat' => '710522070001',    'name' => 'Ritha F Montolalu', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7105085612960002', 'id_sobat' => '710522030022',    'name' => 'Chreesella Suak', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7105224810830001', 'id_sobat' => '710522110002',    'name' => 'Jeinne Rantung', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7202271208810001', 'id_sobat' => '710523030006',    'name' => 'Audy Runtuwarow', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7105154404860001', 'id_sobat' => '710522030008',    'name' => 'Ireine Polla', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7105235906890001', 'id_sobat' => '710522070002',    'name' => 'Youningshe Ervina Punu', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7106035702870001', 'id_sobat' => '710622020023',    'name' => 'Ferni Trovena Kalalo', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7106056308890001', 'id_sobat' => '710622090053',    'name' => 'Sartika citra wantania', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7171056107930003', 'id_sobat' => '710622020026',    'name' => 'Sikawahyu christiana timpalen', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7106064207830001', 'id_sobat' => '710622020002',    'name' => 'RETY ITMASYA AMAR', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7106046310910003', 'id_sobat' => '710622030004',    'name' => 'Intan Lawitan', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7106061109820001', 'id_sobat' => '710622030030',    'name' => 'Julham Angguhe', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7106027108790001', 'id_sobat' => '710622030018',    'name' => 'Yenny Iryanti Umboh', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7106042106890002', 'id_sobat' => '710622020003',    'name' => 'Fardi Mangansing', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7106014604860001', 'id_sobat' => '710622050001',    'name' => 'ALNAVIA ALTROYDA SENDUK', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7106074110800003', 'id_sobat' => '710622050034',    'name' => 'Dedi Kodoatie', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7106074505770001', 'id_sobat' => '710622090170',    'name' => 'Selvi Tumangkeng', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7171082304650004', 'id_sobat' => '710623030019',    'name' => 'Joseph Eduard Kolopitawondal', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7171020111830007', 'id_sobat' => '710623030011',    'name' => 'Jenlex Randy Domits', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7106026601050002', 'id_sobat' => '710622090146',    'name' => 'Jessica Chantha Patricia Runtukahu', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '3276026901900006', 'id_sobat' => '710622030001',    'name' => 'Marsela Janet Lengkey', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7106104706770001', 'id_sobat' => '710622030002',    'name' => 'Jenni Manikome', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7106046806860001', 'id_sobat' => '710622030008',    'name' => 'Feronika Maryance Manansang', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7108040302900002', 'id_sobat' => '710722030009',    'name' => 'VICKY FEBRI PONTOH', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7108052306900001', 'id_sobat' => '710722030021',    'name' => 'Junardi Tonote', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7108036611950001', 'id_sobat' => '710722030015',    'name' => 'Annastasia Cicilia Awumbas', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7108026604790001', 'id_sobat' => '710722030005',    'name' => 'Avriona Rieneke Pesik', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7108025211800001', 'id_sobat' => '710722090008',    'name' => 'Siswohastuti hinur', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7108025306950001', 'id_sobat' => '710722090086',    'name' => 'Christina Natalia Kantohe', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7108066306940001', 'id_sobat' => '710722020017',    'name' => 'Muhrin Alhasni', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7108042505890002', 'id_sobat' => '710722020004',    'name' => 'Abdul Yahya Toliu', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7108056009960001', 'id_sobat' => '710722030007',    'name' => 'MIRANTI TUELAH', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7108030212940001', 'id_sobat' => '710723030015',    'name' => 'Arlan madihutu', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7108051407960002', 'id_sobat' => '710722090026',    'name' => 'DIDIN BINOL', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7108045207810001', 'id_sobat' => '710722030016',    'name' => 'Miniyarti Talibo', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7108066409930003', 'id_sobat' => '710722030024',    'name' => 'Herlina Djauhari', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7108015101950002', 'id_sobat' => '710722090017',    'name' => 'Wulandari Bonde', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7109011609760002', 'id_sobat' => '710822030010',    'name' => 'Kristianus Boby Mokodompis', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7171011711790002', 'id_sobat' => '710822030023',    'name' => 'NOPRI SARIU', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7109012905910001', 'id_sobat' => '710822090042',    'name' => 'Joniver Reiner Mona', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7109084704890004', 'id_sobat' => '710823030011',    'name' => 'IMELDA LIN HORONI', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7109012504830002', 'id_sobat' => '710822030006',    'name' => 'Erick salindeho', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7109075708980001', 'id_sobat' => '710823030001',    'name' => 'Karmila Jacobs', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7109034506960002', 'id_sobat' => '710822030024',    'name' => 'Ansye Sindy Zanda', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7107110312990001', 'id_sobat' => '710923030005',    'name' => 'DEJAN SOVISIVIC ONSU', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7107054104960001', 'id_sobat' => '710922020009',    'name' => 'Syalmy S H Tumbol', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7107011101790001', 'id_sobat' => '710922020003',    'name' => 'Jackson jefry Massie', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7107046609870001', 'id_sobat' => '710923030019',    'name' => 'Jelfi Joifi Keintjem', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7107096408980002', 'id_sobat' => '710922090036',    'name' => 'Susanti Andriani Kotangon', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7107096312710001', 'id_sobat' => '710922030022',    'name' => 'Detie Kembaw', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7107012212970001', 'id_sobat' => '710922090106',    'name' => 'TOMMY FRANS PANDALEKE', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7107035606710001', 'id_sobat' => '710922030023',    'name' => 'Ratiza Golopito', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7107025710910001', 'id_sobat' => '710922090097',    'name' => 'Failin Olfiane Walalangi', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7107086910960001', 'id_sobat' => '710922090003',    'name' => 'LIVIA STEPHANI WATANIA', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7107096810800003', 'id_sobat' => '710922030039',    'name' => 'Olce Olke Naray', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7107046202910001', 'id_sobat' => '710922020030',    'name' => 'Beverly Pricilia Adam', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7107016411800002', 'id_sobat' => '710922020013',    'name' => 'Neni Steva Ompi', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7107056603900001', 'id_sobat' => '710922030014',    'name' => 'PRISCILLIA CLAUDIA PONOMBAN', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7107062809730001', 'id_sobat' => '710922090054',    'name' => 'Nedi Sem Lendombela', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7107124408910001', 'id_sobat' => '710922020008',    'name' => 'Nenda Anggrystha tarumingi', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7111030406830001', 'id_sobat' => '711022030008',    'name' => 'Mohamad Nento', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7111024206920001', 'id_sobat' => '711022030012',    'name' => 'DEWY FADLUN ALHASNI', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7111012204850002', 'id_sobat' => '711022030018',    'name' => 'ASRIL TUADINGO', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7111022712840002', 'id_sobat' => '711022030014',    'name' => 'ISKANDAR DALI', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101091102640001', 'id_sobat' => '710122030046',    'name' => 'Burhanuddin Potabuga', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7111051806910001', 'id_sobat' => '711022010001',    'name' => 'Ripandi Dede', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7111012604900001', 'id_sobat' => '711022030005',    'name' => 'Frangki Laselo', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7111020811860002', 'id_sobat' => '711022030004',    'name' => 'Novri Hunou', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7111052509920001', 'id_sobat' => '711022030009',    'name' => 'Sumario Mokodongan', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7111026712910001', 'id_sobat' => '711022030013',    'name' => 'Wilna Aliu', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7571020211900002', 'id_sobat' => '711022090045',    'name' => 'MOH. RIFAI GOMBA', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7110041007810001', 'id_sobat' => '711122010003',    'name' => 'ARISANDY PONIREN', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7110041105930001', 'id_sobat' => '711122020003',    'name' => 'Sukridi Lomban', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7110012603870002', 'id_sobat' => '711122030016',    'name' => 'Wardani paputungan', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7110010812720001', 'id_sobat' => '711122030030',    'name' => 'Asirun Paputungan', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7106021910870001', 'id_sobat' => '711122030026',    'name' => 'Robin Kalangi', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7110045103820001', 'id_sobat' => '711122030014',    'name' => 'Lidya Saud', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7110035705890001', 'id_sobat' => '711122030008',    'name' => 'SITI ROMLAH DAENG MANGAWI', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7110052809980001', 'id_sobat' => '711122010001',    'name' => 'IRZA MAHENDRA MAMONTO', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7101314111820302', 'id_sobat' => '711122030028',    'name' => 'Vivi Potabuga', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7110055501900001', 'id_sobat' => '711122030003',    'name' => 'Angel Yeane Lombogia', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7110031909770001', 'id_sobat' => '711122090096',    'name' => 'Ibrahimmakalalag makalalag', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7110051807860001', 'id_sobat' => '711122030012',    'name' => 'Feily Lumangkun', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7110024910980001', 'id_sobat' => '711122090010',    'name' => 'Novita A Saleh', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7172074512860004', 'id_sobat' => '717222030001',    'name' => 'Deasy Natalia Hengkeng', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '3525155104890002', 'id_sobat' => '717222030013',    'name' => 'Lina Aprilia', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7172065010730001', 'id_sobat' => '717222030028',    'name' => 'Emy Syah', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7173022310820001', 'id_sobat' => '717322010012',    'name' => 'Voldy Oubert Pangkerego', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7173016709810003', 'id_sobat' => '717322090065',    'name' => 'Suzan Herly Rumajar', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7173024906770001', 'id_sobat' => '717322090063',    'name' => 'Jeinne Adriana Yeskiel', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7173025811850002', 'id_sobat' => '717322090064',    'name' => 'Windy rainy wongkar', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7174035612820001', 'id_sobat' => '717422030011',    'name' => 'Meilan ponuntul', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7174020308920001', 'id_sobat' => '717422030022',    'name' => 'Rizqi wisudawanto sukimin', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7174034310830001', 'id_sobat' => '717422030033',    'name' => 'Fitriani mamonto', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7174043011720001', 'id_sobat' => '717422090039',    'name' => 'Noldy Tambuwun', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7174036203810001', 'id_sobat' => '717422090026',    'name' => 'HELMI KODAYOW', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7174035603930002', 'id_sobat' => '717422030032',    'name' => 'Estria ramdani gonibala', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7174010911900002', 'id_sobat' => '717422030001',    'name' => 'Irwansyah Dondo', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7174021709930002', 'id_sobat' => '717422010006',    'name' => 'Sugiarto Mamonto', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7174040701970003', 'id_sobat' => '717422090079',    'name' => 'Aditya Saputra', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7174016506820001', 'id_sobat' => '717422050007',    'name' => 'Meity Serly Dondo', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], ['nik' => '7174044107870024', 'id_sobat' => '717422010001',    'name' => 'Dewi Prinita Mongilong, SE', 'posisi' => 'Pemeriksa Lapangan Sensus'], [
                'nik' => '7174022905830001', 'id_sobat' => '717422030034',    'name' => 'Rudy Ginoga', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '7174926601830001', 'id_sobat' => '717422030038',    'name' => 'Nini sutrisni polo', 'posisi' => 'Pemeriksa Lapangan Sensus'
            ], [
                'nik' => '3302081310980001', 'id_sobat' => '330208131098',    'name' => 'Ponimin', 'posisi' => 'Admins'
            ],  ['nik' => '340019768', 'id_sobat' => '340019768',    'name' => 'Steven Monintja', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340016366', 'id_sobat' => '340016366',    'name' => 'Linda Diana Lumingkewas SE', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340012330', 'id_sobat' => '340012330',    'name' => 'Lomat Tungkagi', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340060824', 'id_sobat' => '340060824',    'name' => 'Novert Cyril Lengkong S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340059999', 'id_sobat' => '340059999',    'name' => 'Aninditya Yuniar S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340016138', 'id_sobat' => '340016138',    'name' => 'Rahmadi S.ST', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340061986', 'id_sobat' => '340061986',    'name' => 'Paramitha Madelin Albright S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340015913', 'id_sobat' => '340015913',    'name' => 'Djon Very Manontonau Lahamendu', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340019522', 'id_sobat' => '340019522',    'name' => 'Fin Mangendai', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340053859', 'id_sobat' => '340053859',    'name' => 'Kharis Metanoia Hendrik Yeremias Mare SE', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340056657', 'id_sobat' => '340056657',    'name' => 'B. Lenskar Diamanis SH', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340056661', 'id_sobat' => '340056661',    'name' => 'Erwin Arifin Makadapa', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340056662', 'id_sobat' => '340056662',    'name' => 'Lusine Karel', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340060175', 'id_sobat' => '340060175',    'name' => 'Krisnanda Prasetya Adi S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340058301', 'id_sobat' => '340058301',    'name' => 'Irfan Damar Prasetyo SST', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340058449', 'id_sobat' => '340058449',    'name' => 'Renald Saputra Salendah SST', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340059746', 'id_sobat' => '340059746',    'name' => 'Rizka Silfiana S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340059821', 'id_sobat' => '340059821',    'name' => 'Yohanes Adinata S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340058325', 'id_sobat' => '340058325',    'name' => 'Loveria Candra Puspita SST', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340061630', 'id_sobat' => '340061630',    'name' => 'Agus Hardiyanto S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340062100', 'id_sobat' => '340062100',    'name' => 'Yogi Resmana Barus S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340019841', 'id_sobat' => '340019841',    'name' => 'Sutriwati Daulu', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340060119', 'id_sobat' => '340060119',    'name' => 'Gilang Cahya Permadi S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340058117', 'id_sobat' => '340058117',    'name' => 'Aldi Rizqul Umam SST', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340058708', 'id_sobat' => '340058708',    'name' => 'Epsilonia Diana Putri S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340060120', 'id_sobat' => '340060120',    'name' => 'Gilar Tri Panji Saputra S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340056634', 'id_sobat' => '340056634',    'name' => 'Abram Prans Tatiwung Gumansalangi', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340019500', 'id_sobat' => '340019500',    'name' => 'Ekstipan Riung Mahda', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340012460', 'id_sobat' => '340012460',    'name' => 'Jakob Tumadariung Mahda', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340019525', 'id_sobat' => '340019525',    'name' => 'Julia Taarae', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340017205', 'id_sobat' => '340017205',    'name' => 'Jusmi Gumansalangi', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340060183', 'id_sobat' => '340060183',    'name' => 'Lutfi Istiqomah Rahayu Handayani S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340055397', 'id_sobat' => '340055397',    'name' => 'Meri Yohana Singkara A.Md', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340020225', 'id_sobat' => '340020225',    'name' => 'Yulita Liroga', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340057878', 'id_sobat' => '340057878',    'name' => 'Julita Dorneka Maapanawang SST', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340061903', 'id_sobat' => '340061903',    'name' => 'Monita Purba S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340061647', 'id_sobat' => '340061647',    'name' => 'Akhmad Farkhan Hazim S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340058199', 'id_sobat' => '340058199',    'name' => 'Desnacita Harly Putri SST', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340056658', 'id_sobat' => '340056658',    'name' => 'Diane Roosjefien Rondonuwu S.P.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340053857', 'id_sobat' => '340053857',    'name' => 'Joice Rorimpandey A.Md', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340053855', 'id_sobat' => '340053855',    'name' => 'Ireyne Tamburian S.Sos', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340055406', 'id_sobat' => '340055406',    'name' => 'Sylvia Tambeo SE', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340060851', 'id_sobat' => '340060851',    'name' => 'Pidyatama Putri Situmorang S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340061832', 'id_sobat' => '340061832',    'name' => 'Irene Savira Gabriella Sitanggang S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340056136', 'id_sobat' => '340056136',    'name' => 'Johannes Hasibuan S.Si, M.SE', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340013054', 'id_sobat' => '340013054',    'name' => 'Usman Antu', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340012495', 'id_sobat' => '340012495',    'name' => 'Oman E Ali SE', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340059277', 'id_sobat' => '340059277',    'name' => 'Nur Alamsyah S.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340060277', 'id_sobat' => '340060277',    'name' => 'Putri Septianingsih S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340053871', 'id_sobat' => '340053871',    'name' => 'Srimaryati Une S.Si', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340012371', 'id_sobat' => '340012371',    'name' => 'Suyanto Hadi Suparto SE', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340060022', 'id_sobat' => '340060022',    'name' => 'Ayu Susilowati S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340060070', 'id_sobat' => '340060070',    'name' => 'Eliza Tiara Devi S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340053860', 'id_sobat' => '340053860',    'name' => 'Meity Chintya Sinadia SE', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340059661', 'id_sobat' => '340059661',    'name' => 'Nadya Tatum Tsaniya S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340057882', 'id_sobat' => '340057882',    'name' => 'Wulandari Ponto SST', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340061650', 'id_sobat' => '340061650',    'name' => 'Albert Junior Chen S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340020454', 'id_sobat' => '340020454',    'name' => 'Yandi Liwe', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340018456', 'id_sobat' => '340018456',    'name' => 'Kurniawan Winston Walangitan SE', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340061714', 'id_sobat' => '340061714',    'name' => 'Bernaldo Napitupulu S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340019852', 'id_sobat' => '340019852',    'name' => 'Kennedy Umadji', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340056636', 'id_sobat' => '340056636',    'name' => 'Deyvi Stella Rumangkang', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340018468', 'id_sobat' => '340018468',    'name' => 'Olivia Widyawaty Sahambangung', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340014899', 'id_sobat' => '340014899',    'name' => 'Nikmah', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340015914', 'id_sobat' => '340015914',    'name' => 'Rikky Marco Williem Jotam Rugian', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340053861', 'id_sobat' => '340053861',    'name' => 'Natalia Ondang S.Si', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340055403', 'id_sobat' => '340055403',    'name' => 'Ricky A.Md', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340053875', 'id_sobat' => '340053875',    'name' => 'Vivi Novita Sumampouw SE', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340060749', 'id_sobat' => '340060749',    'name' => 'Maskhur Solikhudin S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340053968', 'id_sobat' => '340053968',    'name' => 'Sahirjan Raup', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340019750', 'id_sobat' => '340019750',    'name' => 'Lasimran Tarib', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340013056', 'id_sobat' => '340013056',    'name' => 'Rudy Helfrich Pomantow', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340013325', 'id_sobat' => '340013325',    'name' => 'Augustin Sultje Selfana Pussung SE.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340013055', 'id_sobat' => '340013055',    'name' => 'Johanna Maria Farida Tampemawa S.E.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340059526', 'id_sobat' => '340059526',    'name' => 'Firly Lutfiana Prahardini S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340058113', 'id_sobat' => '340058113',    'name' => 'Ahmad Samsudin SST', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340058820', 'id_sobat' => '340058820',    'name' => 'Marcopolo Gultom S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340058912', 'id_sobat' => '340058912',    'name' => 'Puput Astutik S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340057590', 'id_sobat' => '340057590',    'name' => 'Satrio Farli Tangkudung SST', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340060202', 'id_sobat' => '340060202',    'name' => 'Mohamad Rezka Aji Pambudi S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340020222', 'id_sobat' => '340020222',    'name' => 'Olivia Susanti Makaringang', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340016364', 'id_sobat' => '340016364',    'name' => 'Susana Ritha Lanny Rumangkang SE', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340014897', 'id_sobat' => '340014897',    'name' => 'Nova Nontje Mieke Palit', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340019504', 'id_sobat' => '340019504',    'name' => 'Reyf Reymond Kumontoy S.E.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340018466', 'id_sobat' => '340018466',    'name' => 'Berliand Fadly Igir SE', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340012576', 'id_sobat' => '340012576',    'name' => 'Santje Magriet Prang SE.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340061885', 'id_sobat' => '340061885',    'name' => 'Manca Satria S.Tr.Stat.', 'posisi' => 'Pemeriksa Lapangan Sensus'],
            ['nik' => '340060268', 'id_sobat' => '340060268',    'name' => 'Ponimin S.Tr.Stat.', 'posisi' => 'Web Developer'],
        ];


        foreach ($array_users as $user) {
            \App\Models\User::factory()->create([
                'name' => $user['name'],
                'nik' => $user['nik'],
                'id_sobat' => $user['id_sobat'],
                'posisi' => $user['posisi'],
                'password' => Hash::make($user['nik'])

            ]);
        }
    }
}
