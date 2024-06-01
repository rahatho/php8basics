<?php
class MessageClass{
    const EXIT_MESSAGE = "Thank you for coming to my TEDDY talk!";

    public function thankYouBye(){
        echo self::EXIT_MESSAGE;
    }
}