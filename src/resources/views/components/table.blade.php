<flux:table :paginate="">
    <flux:columns>
        <flux:column>Customer</flux:column>
        <flux:column sortable :sorted="$sortBy === 'date'" :direction="$sortDirection" wire:click="sort('date')">Date
        </flux:column>
        <flux:column sortable :sorted="$sortBy === 'status'" :direction="$sortDirection" wire:click="sort('status')">
            Status</flux:column>
        <flux:column sortable :sorted="$sortBy === 'amount'" :direction="$sortDirection" wire:click="sort('amount')">
            Amount</flux:column>
    </flux:columns>

    <flux:rows>
        <flux:row :key="$order - > id">
            <flux:cell class="flex items-center gap-3">

            </flux:cell>

            <flux:cell class="whitespace-nowrap"></flux:cell>

            <flux:cell>
                <flux:badge size="sm" :color="$order - > status_color" inset="top bottom"></flux:badge>
            </flux:cell>

            <flux:cell variant="strong"></flux:cell>

            <flux:cell>
                <flux:button variant="ghost" size="sm" icon="ellipsis-horizontal" inset="top bottom"></flux:button>
            </flux:cell>
        </flux:row>
    </flux:rows>
</flux:table>

<!-- Livewire component example code...
    use \Livewire\WithPagination;

    public $sortBy = 'date';
    public $sortDirection = 'desc';

    public function sort($column) {
        if ($this->sortBy === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $column;
            $this->sortDirection = 'asc';
        }
    }

    #[\Livewire\Attributes\Computed]
    public function orders()
    {
        return \App\Models\Order::query()
            ->tap(fn ($query) => $this->sortBy ? $query->orderBy($this->sortBy, $this->sortDirection) : $query)
            ->paginate(5);
    }
-->
