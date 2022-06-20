<?php
class Booking{
    public function bookingHotel(){
        $stay = new Traithotel;
        $stay->Bookinghotel();
    }

    public function stayHotel(){
        $stay = new Traithotel;
        $stay->Stay();
    }
}
?>