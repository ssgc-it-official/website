<?php

use App\Models\DocumentSection;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\MenuItem;

new #[Layout('layouts.template-1')] class extends Component
{
    public DocumentSection $section;

    public function mount(string $slug): void
    {
        $this->section = DocumentSection::query()
            ->where('slug', $slug)
            ->firstOrFail();
    }
};
?>

<div>
    <!-- Breadcrumb Start -->
    <x-breadcrumb :title="$section->title" :watermark="$section->heading" />
    <!-- Breadcrumb End -->

    <x-pdf :href="$section->getFirstMediaUrl('pdf')" :title="$section->sub_heading" :heading="$section->heading"
        :date="$section->updated_at->format('F j, Y')" />
</div>
