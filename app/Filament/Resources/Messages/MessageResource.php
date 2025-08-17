// app/Filament/Resources/MessageResource.php
// ... (namespace dan use statement)
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;

public static function form(Form $form): Form
{
    return $form
        ->schema([
            // Form dibuat read-only
            TextInput::make('name')->disabled(),
            TextInput::make('email')->disabled(),
            TextInput::make('subject')->disabled(),
            Textarea::make('body')->columnSpanFull()->disabled(),
        ]);
}

public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('name')->searchable(),
            TextColumn::make('email')->searchable(),
            TextColumn::make('subject'),
            TextColumn::make('created_at')->dateTime()->sortable(),
        ])
        ->actions([
            Tables\Actions\ViewAction::make(), // Hanya bisa dilihat
        ])
        // ...
}

// Tambahkan ini agar tombol 'Create New' hilang
public static function canCreate(): bool
{
    return false;
}