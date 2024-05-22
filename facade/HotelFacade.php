<?php
require_once 'Payment.php';
require_once 'Booking.php';
require_once 'Notification.php';

class HotelFacade{
    protected $booking;
    protected $payment;
    protected $notification;

    public function __construct(){
        $this->booking=new Booking();
        $this->payment=new Payment();
        $this->notification=new Notification();
    }
    public function bookProccess($price){
        $this->booking->book();
        $this->payment->pay($price);
        $this->notification->sentMessage();
    }
}

$hotel = new HotelFacade();
$hotel->bookProccess(30);