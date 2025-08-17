// app/Filament/Resources/TestimonialResource.php
// ... (namespace dan use statement)
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;

public static function form(Form $form): Form
{
    return $form
        ->schema([
            TextInput::make('name')->required()->maxLength(255),
            Textarea::make('message')->required()->columnSpanFull(),
            Select::make('status')
                ->options([
                    'pending' => 'Pending',
                    'approved' => 'Approved',
                ])
                ->required(),
        ]);
}

public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('name')->searchable(),
            TextColumn::make('message')->limit(50),
            BadgeColumn::make('status')
                ->colors([
                    'warning' => 'pending',
                    'success' => 'approved',
                ]),
            TextColumn::make('created_at')->dateTime()->sortable(),
        ])
        // ... (actions dan bulkActions sama seperti BookResource)
}