<?php

namespace Predis\Commands;

use Predis\Command;

class SelectDatabase extends Command {
    public function canBeHashed()  { return false; }
    public function getCommandId() { return 'SELECT'; }
}