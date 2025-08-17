// app/Filament/Resources/ArticleResource.php
// ... (namespace dan use statement)
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;


public static function form(Form $form): Form
{
    return $form
        ->schema([
            TextInput::make('title')->required()->maxLength(255)->columnSpanFull(),
            FileUpload::make('thumbnail')->image()->directory('thumbnails')->columnSpanFull(),
            TextInput::make('category')->required()->maxLength(255),
            RichEditor::make('content')->required()->columnSpanFull(),
        ]);
}

public static function table(Table $table): Table
{
    return $table
        ->columns([
            ImageColumn::make('thumbnail')->width(100)->height('auto'),
            TextColumn::make('title')->searchable(),
            TextColumn::make('category')->searchable(),
            TextColumn::make('created_at')->dateTime()->sortable(),
        ])
        // ... (actions dan bulkActions sama seperti BookResource)
}