<?php

namespace App\Livewire\App;

use App\Models\Report as ModelsReport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Laporan')]
#[Layout('layouts.app')]

class Report extends Component
{
    use LivewireAlert;

    public $itemToDelete;
    protected $listeners = [
        'confirmedDeletion',
    ];

    public function destroy($id)
    {
        $this->itemToDelete = $id;

        $this->alert('warning', 'Yakin ingin menghapus data?', [
            'position' => 'top-end',
            'timer' => null,
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'confirmedDeletion',
            'showDenyButton' => true,
            'onDenied' => '',
            'denyButtonText' => 'Tidak',
            'width' => '400',
            'confirmButtonText' => 'Iya',
        ]);
    }

    public function confirmedDeletion()
    {
        $id = $this->itemToDelete;

        $data = ModelsReport::find($id);
        if ($data) {
            Storage::disk('public')->delete('report/' . $data->file);
            $data->delete();
            $this->alert('success', 'Berhasil Menghapus Data', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'text' => '',
                'timerProgressBar' => true,
            ]);
        } else {
            $this->alert('error', 'Gagal Menghapus Data', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }

        $this->itemToDelete = null;
        return redirect()->back();
    }



    public function render()
    {
        $dataReport = ModelsReport::where('division_id', Auth::user()->division_id)->get();
        return view('livewire.app.report', [
            'reports' => $dataReport
        ]);
    }
}
