<?php
    interface SchedaAudio{
        public function riproduciAudio();

    }
    class SchedaAudioUSB implements SchedaAudio{
        public function riproduciAudio(){
            echo "riproduzione audio...";
        }
    }

    $usb = new SchedaAudioUSB();
    $usb->riproduciAudio();
?>