<?php
    class DemirbasTipi{
        public $tip;
        public $ozellik1;
        public $ozellik2;
        public $ozellik3;
        public $ozellik4;
        public $ozellik5;
        public $ozellik6;
        public $ozellik7;

        public function __construct($tip,$ozellik1)
        {
            $this->tip = $tip;
            $this->ozellik1 = $ozellik1;
        }

        /**
         * @param mixed $ozellik2
         */
        public function setOzellik2($ozellik2): void
        {
            $this->ozellik2 = $ozellik2;
        }

        /**
         * @param mixed $ozellik3
         */
        public function setOzellik3($ozellik3): void
        {
            $this->ozellik3 = $ozellik3;
        }

        /**
         * @param mixed $ozellik4
         */
        public function setOzellik4($ozellik4): void
        {
            $this->ozellik4 = $ozellik4;
        }

        /**
         * @param mixed $ozellik5
         */
        public function setOzellik5($ozellik5): void
        {
            $this->ozellik5 = $ozellik5;
        }

        /**
         * @param mixed $ozellik6
         */
        public function setOzellik6($ozellik6): void
        {
            $this->ozellik6 = $ozellik6;
        }

        /**
         * @param mixed $ozellik7
         */
        public function setOzellik7($ozellik7): void
        {
            $this->ozellik7 = $ozellik7;
        }





    }