import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/Guest/**/*.php',
        './resources/views/components/**/*.blade.php',
        './resources/views/filament/guest/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
}
