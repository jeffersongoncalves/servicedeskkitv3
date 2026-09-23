import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/Agent/**/*.php',
        './resources/views/components/**/*.blade.php',
        './resources/views/filament/agent/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
}
