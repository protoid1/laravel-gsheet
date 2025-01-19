<?php

require __DIR__ . '/../public/index.php';
Tracy\Debugger::enable(Tracy\Debugger::Production);

throw new RuntimeException('Hello Tracy!');