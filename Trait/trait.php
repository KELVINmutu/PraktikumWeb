<?php
trait Bookinghotel{
    public function Bookinghotel(){
        $hotel = new Hotel();
        $customer = "Saya telah memesan hotel {$hotel->showHotel()} dengan harga {$hotel->showPrice()}";
        echo $customer;
    }
}

trait Stay{
    public function Stay(){
        $stayHotel = new Hotel();
        $result = "Saya tinggal di {$stayHotel->showHotel()} dengan pacar saya";
        echo $result;
    }
}
class Traithotel{
    use Bookinghotel,Stay;
}
?>