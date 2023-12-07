<?php

    class EnvLoader
    {
        private string $_PATH;
        public function __construct(string $path)
        {
            $this->_PATH = $path;
        }

        public function load_env(): void
        {
            $file = fopen($this->_PATH, "r");
            if($file)
            {
                while(($buffer = fgets($file, 4096)) !== false)
                {
                    $buffer = trim(str_replace('\n', '', (str_replace('\r', '', $buffer))));
                    putenv($buffer);
                }
            }
        }
    }


