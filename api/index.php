<?php

require __DIR__ . '/../public/index.php';
Tracy\Debugger::enable(Tracy\Debugger::DEVELOPMENT);

throw new RuntimeException('Hello Tracy!');