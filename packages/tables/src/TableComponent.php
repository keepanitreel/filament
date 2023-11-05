<?php

namespace Filament\Tables;

use Closure;
use Filament\Forms;
use Filament\Tables\Enums\PaginationLayout;
use Livewire\Component;

abstract class TableComponent extends Component implements Contracts\HasTable, Forms\Contracts\HasForms
{
    use Concerns\InteractsWithTable;
    use Forms\Concerns\InteractsWithForms;
}
