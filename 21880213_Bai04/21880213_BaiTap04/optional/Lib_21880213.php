<?php
    class SinhVien {
        public $mssv;
        public $hoTen;
        public $dtb;
        public $avatarUrl;

        function __construct($_mssv, $_hoTen, $_dtb, $_avatarUrl)
        {
            $this->mssv = $_mssv;
            $this->hoTen = $_hoTen;
            $this->dtb = $_dtb;
            $this->avatarUrl = $_avatarUrl;
        }
    }

    class TaoDuLieu {

        private static $dsHo = array('Nguyễn', 'Trần', 'Lê', 'Phạm', 'Hoàng', 'Huỳnh','Vũ', 'Võ', 'Phan', 'Trương', 'Bùi', 'Đặng', 'Đỗ', 'Ngô', 'Hồ', 'Dương', 'Đinh');
        private static $dsTenDem = array('Ái', 'An', 'Bảo', 'Hải', 'Linh', 'Khánh', 'Như', 'Nhã', 'Minh', 'Phương', 'Anh', 'Minh', 'Gia');
        private static $dsTen = array('Khoa', 'Cường', 'Tài', 'Anh', 'Thiện', 'Tài', 'Khang', 'Khoa', 'Khôi', 'Kiệt', 'Minh', 'Vy', 'Tường', 'Hân', 'Ngân', 'Hà', 'Chi', 'Thuý');

        private static $avatarUrls = array(
            'https://png.pngtree.com/element_our/20200610/ourlarge/pngtree-default-avatar-image_2237213.jpg',
            'https://img.pikbest.com/png-images/qianku/default-avatar_2404265.png!w700wp',
            'https://phongreviews.com/wp-content/uploads/2022/11/avatar-facebook-mac-dinh-8.jpg',
            'https://i.pinimg.com/736x/c6/e5/65/c6e56503cfdd87da299f72dc416023d4.jpg',
            'https://khoinguonsangtao.vn/wp-content/uploads/2022/07/avatar-gau-cute-560x560.jpg',
            'https://khoinguonsangtao.vn/wp-content/uploads/2022/07/anh-avatar-cute-chibi-560x560.jpg',
            'https://khoinguonsangtao.vn/wp-content/uploads/2022/07/hinh-avatar-cute-bui-toc-2-ben.jpg',
            'https://khoinguonsangtao.vn/wp-content/uploads/2022/07/avatar-cute-gau-nau-voi-qua-trung-vo-tren-tran-560x560.jpg',
            'https://khoinguonsangtao.vn/wp-content/uploads/2022/07/avatar-cute-boy-khoc-nhe-443x560.jpg',
            'https://khoinguonsangtao.vn/wp-content/uploads/2022/07/hinh-avatar-cute-co-be-an-dua-hau-560x560.jpg',
            'https://khoinguonsangtao.vn/wp-content/uploads/2022/07/hinh-avatar-cute-cosplay-hoat-hinh-560x560.jpg'
        );

        public static function taoDSSV($slsv) {
            $dssv = array();
            $mssv = rand(2000, 2400) * 10000;
            for($i = 0; $i < $slsv; $i++) {
                $mssv++;
                $sv = new SinhVien(
                    $mssv, 
                    TaoDuLieu::taoTenDayDu(), 
                    TaoDuLieu::taoDtb(), 
                    TaoDuLieu::taoAvatarUrl()
                );
                
                array_push($dssv, $sv);
            }
            return $dssv;
        }

        private static function taoTenDayDu() {
            $ho = TaoDuLieu::$dsHo[rand(0, count(TaoDuLieu::$dsHo)-1)];

            $tenDem = TaoDuLieu::$dsTenDem[rand(0, count(TaoDuLieu::$dsTenDem)-1)];
            //2-3 chu o ten dem
            if(rand(0,1)) {
                $tenDem .= ' ' . TaoDuLieu::$dsTenDem[rand(0, count(TaoDuLieu::$dsTenDem)-1)];
            }
            if(rand(0,1)) {
                $tenDem .= ' ' . TaoDuLieu::$dsTenDem[rand(0, count(TaoDuLieu::$dsTenDem)-1)];
            }

            $ten = TaoDuLieu::$dsTen[rand(0, count(TaoDuLieu::$dsTen)-1)];

            return $ho . ' ' . $tenDem . ' ' . $ten;
        }

        private static function taoAvatarUrl() {
            return TaoDuLieu::$avatarUrls[rand(0, count(TaoDuLieu::$avatarUrls)-1)];
        }
        
        private static function taoDtb() {
            return rand(1,100)/10;
        }
    }
?>