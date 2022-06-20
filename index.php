<?php
include 'Abstract/list.php';
include 'Child/hotel.php';
include 'Parent/booking.php';
include 'Trait/trait.php';

$stay = new Booking;
$stay->bookingHotel();
echo "<br/>";
echo "NEXT";
echo "<br/>";
$stay->stayHotel();
?>