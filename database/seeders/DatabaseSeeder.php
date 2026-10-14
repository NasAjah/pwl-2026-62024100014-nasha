

public function run(): void
{
    $this->call([
        PatientSeeder::class,
        DoctorSeeder::class,
        PoliSeeder::class,
    ]);
}