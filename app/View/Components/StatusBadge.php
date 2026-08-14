<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StatusBadge extends Component
{
    public $status;
    public $colorClass;

    public function __construct($status = '')
    {
        $this->status = $status;
        $s = strtolower(trim((string) $status));

        if ($s === 'aktif') {
            $this->colorClass = 'bg-green-100 text-green-800 border-green-500';
        } elseif (in_array($s, ['tidak aktif', 'tidak_aktif', 'tidak-aktif'], true)) {
            $this->colorClass = 'bg-red-100 text-red-800 border-red-500';
        } else {
            $this->colorClass = 'bg-gray-50 text-gray-600 border-gray-200';
        }
    }

    public function render()
    {
        return view('components.status-badge');
    }
}