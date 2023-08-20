<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\ServicesComponent;
use App\Http\Livewire\DepartmentsComponent;
use App\Http\Livewire\DoctorsComponent;


use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\Users\AddUserComponent;
use App\Http\Livewire\Admin\Users\EditUserComponent;
use App\Http\Livewire\Admin\Users\UsersComponent;
use App\Http\Livewire\Admin\Users\ShowUserComponent;

use App\Http\Livewire\Admin\Doctors\AddDoctorsComponent;
use App\Http\Livewire\Admin\Doctors\AdminDoctorsComponent;
use App\Http\Livewire\Admin\Doctors\EditDoctorsComponent;
use App\Http\Livewire\Admin\Doctors\ShowDoctorsComponent;

use App\Http\Livewire\Admin\DoctorOffices\AddDoctorOfficesComponent;
use App\Http\Livewire\Admin\DoctorOffices\DoctorOfficesComponent;
use App\Http\Livewire\Admin\DoctorOffices\EditDoctorOfficesComponent;
use App\Http\Livewire\Admin\DoctorOffices\ShowDoctorOfficesComponent;

use App\Http\Livewire\Admin\Plans\AddPlansComponent;
use App\Http\Livewire\Admin\Plans\PlansComponent;
use App\Http\Livewire\Admin\Plans\EditPlansComponent;
use App\Http\Livewire\Admin\Plans\ShowPlansComponent;

use App\Http\Livewire\Admin\CabinetTypes\AddCabinetTypesComponent;
use App\Http\Livewire\Admin\CabinetTypes\CabinetTypesComponent;
use App\Http\Livewire\Admin\CabinetTypes\EditCabinetTypesComponent;
use App\Http\Livewire\Admin\CabinetTypes\ShowCabinetTypesComponent;

use App\Http\Livewire\Admin\Medications\AddMedicationsComponent;
use App\Http\Livewire\Admin\Medications\MedicationsComponent;
use App\Http\Livewire\Admin\Medications\EditMedicationsComponent;
use App\Http\Livewire\Admin\Medications\ShowMedicationsComponent;

use App\Http\Livewire\Admin\MedicalBackgrounds\AddMedicalBackgroundsComponent;
use App\Http\Livewire\Admin\MedicalBackgrounds\MedicalBackgroundsComponent;
use App\Http\Livewire\Admin\MedicalBackgrounds\EditMedicalBackgroundsComponent;
use App\Http\Livewire\Admin\MedicalBackgrounds\ShowMedicalBackgroundsComponent;


use App\Http\Livewire\Admin\Requests\AddRequestsComponent;
use App\Http\Livewire\Admin\Requests\RequestsComponent;
use App\Http\Livewire\Admin\Requests\EditRequestsComponent;
use App\Http\Livewire\Admin\Requests\ShowRequestsComponent;




use App\Http\Livewire\Admin\Appointments\AddAppointmentsComponent;
use App\Http\Livewire\Admin\Appointments\AppointmentsComponent;
use App\Http\Livewire\Admin\Appointments\EditAppointmentsComponent;
use App\Http\Livewire\Admin\Appointments\ShowAppointmentsComponent;


use App\Http\Livewire\Admin\Contacts\AddContactsComponent;
use App\Http\Livewire\Admin\Contacts\ContactsComponent;
use App\Http\Livewire\Admin\Contacts\EditContactsComponent;
use App\Http\Livewire\Admin\Contacts\ShowContactsComponent;

use App\Http\Livewire\Admin\Blogs\AddBlogsComponent;
use App\Http\Livewire\Admin\Blogs\BlogsComponent;
use App\Http\Livewire\Admin\Blogs\EditBlogsComponent;
use App\Http\Livewire\Admin\Blogs\ShowBlogsComponent;
use App\Http\Livewire\Admin\MedicalBackgroundCategories\AddMedicalBackgroundCategoriesComponent;
use App\Http\Livewire\Admin\MedicalBackgroundCategories\EditMedicalBackgroundCategoriesComponent;
use App\Http\Livewire\Admin\MedicalBackgroundCategories\MedicalBackgroundCategoriesComponent;
use App\Http\Livewire\Admin\MedicalBackgroundCategories\ShowMedicalBackgroundCategoriesComponent;
use App\Http\Livewire\Admin\MediCategories\AddMediCategoriesComponent;
use App\Http\Livewire\Admin\MediCategories\EditMediCategoriesComponent;
use App\Http\Livewire\Admin\MediCategories\MediCategoriesComponent;
use App\Http\Livewire\Admin\MediCategories\ShowMediCategoriesComponent;
use App\Http\Livewire\Admin\Settings\SettingsComponent;
use App\Http\Livewire\Cabinet\AppointmentsCabinets\AddAppointmentCabinetsComponent;
use App\Http\Livewire\Cabinet\AppointmentsCabinets\AppointmentCabinetsComponent;
use App\Http\Livewire\Cabinet\AppointmentsCabinets\EditAppointmentCabinetsComponent;
use App\Http\Livewire\Cabinet\AppointmentsCabinets\ShowAppointmentCabinetsComponent;
////////////////////////////////////////////////////////////////////////////////



use App\Http\Livewire\Cabinet\Arrangements\AddArrangementsComponent;
use App\Http\Livewire\Cabinet\Arrangements\ArrangementsComponent;
use App\Http\Livewire\Cabinet\Arrangements\EditArrangementsComponent;
use App\Http\Livewire\Cabinet\Arrangements\ShowArrangementsComponent;

use App\Http\Livewire\Cabinet\CabinetDashboardComponent;


use App\Http\Livewire\Cabinet\Expenses\AddExpensesComponent;
use App\Http\Livewire\Cabinet\Expenses\EditExpensesComponent;
use App\Http\Livewire\Cabinet\Expenses\ExpensesComponent;
use App\Http\Livewire\Cabinet\Expenses\ShowExpensesComponent;

use App\Http\Livewire\Cabinet\ExpenseCategories\AddExpenseCategoriesComponent;
use App\Http\Livewire\Cabinet\ExpenseCategories\EditExpenseCategoriesComponent;
use App\Http\Livewire\Cabinet\ExpenseCategories\ExpenseCategoriesComponent;
use App\Http\Livewire\Cabinet\ExpenseCategories\ShowExpenseCategoriesComponent;

use App\Http\Livewire\Cabinet\Personals\PersonalsComponent;
use App\Http\Livewire\Cabinet\Personals\AddPersonalsComponent;
use App\Http\Livewire\Cabinet\Personals\EditPersonalsComponent;
use App\Http\Livewire\Cabinet\Personals\ShowPersonalsComponent;

use App\Http\Livewire\Cabinet\Grades\GradesComponent;
use App\Http\Livewire\Cabinet\Grades\AddGradesComponent;
use App\Http\Livewire\Cabinet\Grades\EditGradesComponent;
use App\Http\Livewire\Cabinet\Grades\ShowGradesComponent;

use App\Http\Livewire\Cabinet\MedicationsCabinets\AddMedicationCabinetsComponent;
use App\Http\Livewire\Cabinet\MedicationsCabinets\EditMedicationCabinetsComponent;
use App\Http\Livewire\Cabinet\MedicationsCabinets\MedicationCabinetsComponent;
use App\Http\Livewire\Cabinet\MedicationsCabinets\ShowMedicationCabinetsComponent;

use App\Http\Livewire\Cabinet\MedicationCategories\AddMedicationCategoriesComponent;
use App\Http\Livewire\Cabinet\MedicationCategories\EditMedicationCategoriesComponent;
use App\Http\Livewire\Cabinet\MedicationCategories\MedicationCategoriesComponent;
use App\Http\Livewire\Cabinet\MedicationCategories\ShowMedicationCategoriesComponent;

use App\Http\Livewire\Cabinet\Patients\AddPatientsComponent;
use App\Http\Livewire\Cabinet\Patients\EditPatientsComponent;
use App\Http\Livewire\Cabinet\Patients\PatientsComponent;
use App\Http\Livewire\Cabinet\Patients\ShowPatientsComponent;

use App\Http\Livewire\Cabinet\Payments\AddPaymentsComponent;
use App\Http\Livewire\Cabinet\Payments\EditPaymentsComponent;
use App\Http\Livewire\Cabinet\Payments\PaymentsComponent;
use App\Http\Livewire\Cabinet\Payments\ShowPaymentsComponent;

use App\Http\Livewire\Cabinet\Seances\AddSeancesComponent;
use App\Http\Livewire\Cabinet\Seances\EditSeancesComponent;
use App\Http\Livewire\Cabinet\Seances\SeancesComponent;
use App\Http\Livewire\Cabinet\Seances\ShowSeancesComponent;

use App\Http\Livewire\Cabinet\SettingCabinets\SettingCabinetsComponent;


use App\Http\Livewire\RegisterCabinetComponent;
use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 

//Public routes 
Route::get('/', HomeComponent::class)->name('landing-home');
Route::get('/about', AboutComponent::class)->name('landing-about');
Route::get('/contact', ContactComponent::class)->name('landing-contact');
Route::get('/blog', BlogComponent::class)->name('landing-blog');
Route::get('/services', ServicesComponent::class)->name('landing-services');
Route::get('/departments', DepartmentsComponent::class)->name('landing-departments');
Route::get('/doctors', DoctorsComponent::class)->name('landing-doctors');



Route::get('/register-cabinet', RegisterCabinetComponent::class)->name('landing-register');


//administration area
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'authadmin'])->group(function () {
    Route::get('/administration/dashboard', AdminDashboardComponent::class)->name('admin-dashboard');
    Route::get('/administration/users', UsersComponent::class)->name('admin-users');
    Route::get('/administration/users/add', AddUserComponent::class)->name('admin-user-add');
    Route::get('/administration/user/{slug}/edit', EditUserComponent::class)->name('admin-user-edit');
    Route::get('/administration/user/{slug}/show', ShowUserComponent::class)->name('admin-user-show');
    ////
    Route::get('/administration/doctors', AdminDoctorsComponent::class)->name('admin-doctors');
    Route::get('/administration/doctors/add', AddDoctorsComponent::class)->name('admin-doctors-add');
    Route::get('/administration/doctors/{slug}/edit', EditDoctorsComponent::class)->name('admin-doctors-edit');
    Route::get('/administration/doctors/{slug}/show', ShowDoctorsComponent::class)->name('admin-doctors-show');
    ///
    Route::get('/administration/doctoroffices', DoctorOfficesComponent::class)->name('admin-doctoroffices');
    Route::get('/administration/doctoroffices/add', AddDoctorOfficesComponent::class)->name('admin-doctoroffices-add');
    Route::get('/administration/doctoroffices/{slug}/edit', EditDoctorOfficesComponent::class)->name('admin-doctoroffices-edit');
    Route::get('/administration/doctoroffices/{slug}/show', ShowDoctorOfficesComponent::class)->name('admin-doctoroffices-show');
    ///
    Route::get('/administration/cabinettypes', CabinetTypesComponent::class)->name('admin-cabinettypes');
    Route::get('/administration/cabinettypes/add', AddCabinetTypesComponent::class)->name('admin-cabinettypes-add');
    Route::get('/administration/cabinettypes/{slug}/edit', EditCabinetTypesComponent::class)->name('admin-cabinettypes-edit');
    Route::get('/administration/cabinettypes/{slug}/show', ShowCabinetTypesComponent::class)->name('admin-cabinettypes-show');
    //// 
    Route::get('/administration/plans', PlansComponent::class)->name('admin-plans');
    Route::get('/administration/plans/add', AddPlansComponent::class)->name('admin-plans-add');
    Route::get('/administration/plans/{slug}/edit', EditPlansComponent::class)->name('admin-plans-edit');
    Route::get('/administration/plans/{slug}/show', ShowPlansComponent::class)->name('admin-plans-show');
    ///
    Route::get('/administration/medications', MedicationsComponent::class)->name('admin-medications');
    Route::get('/administration/medications/add', AddMedicationsComponent::class)->name('admin-medications-add');
    Route::get('/administration/medications/{slug}/edit', EditMedicationsComponent::class)->name('admin-medications-edit');
    Route::get('/administration/medications/{slug}/show', ShowMedicationsComponent::class)->name('admin-medications-show');
    ///
    Route::get('/administration/medicalbackgrounds', MedicalBackgroundsComponent::class)->name('admin-medicalbackgrounds');
    Route::get('/administration/medicalbackgrounds/add', AddMedicalBackgroundsComponent::class)->name('admin-medicalbackgrounds-add');
    Route::get('/administration/medicalbackgrounds/{slug}/edit', EditMedicalBackgroundsComponent::class)->name('admin-medicalbackgrounds-edit');
    Route::get('/administration/medicalbackgrounds/{slug}/show', ShowMedicalBackgroundsComponent::class)->name('admin-medicalbackgrounds-show');


    Route::get('/administration/medicalbackgroundcategories', MedicalBackgroundCategoriesComponent::class)->name('admin-medicalbackgroundcategory');
    Route::get('/administration/medicalbackgroundcategories/add', AddMedicalBackgroundCategoriesComponent::class)->name('admin-medicalbackgroundcategory-add');
    Route::get('/administration/medicalbackgroundcategories/{slug}/edit', EditMedicalBackgroundCategoriesComponent::class)->name('admin-medicalbackgroundcategory-edit');
    Route::get('/administration/medicalbackgroundcategories/{slug}/show', ShowMedicalBackgroundCategoriesComponent::class)->name('admin-medicalbackgroundcategory-show');

    Route::get('/administration/medicategories', MediCategoriesComponent::class)->name('admin-medicategories');
    Route::get('/administration/medicategories/add', AddMediCategoriesComponent::class)->name('admin-medicategories-add');
    Route::get('/administration/medicategories/{slug}/edit', EditMediCategoriesComponent::class)->name('admin-medicategories-edit');
    Route::get('/administration/medicategories/{slug}/show', ShowMediCategoriesComponent::class)->name('admin-medicategories-show');

    Route::get('/administration/Requests', RequestsComponent::class)->name('admin-Requests');
    Route::get('/administration/Requests/add', AddRequestsComponent::class)->name('admin-Requests-add');
    Route::get('/administration/Requests/{slug}/edit', EditRequestsComponent::class)->name('admin-Requests-edit');
    Route::get('/administration/Requests/{slug}/show', ShowRequestsComponent::class)->name('admin-Requests-show');
    //
    Route::get('/administration/Appointments', AppointmentsComponent::class)->name('admin-Appointments');
    Route::get('/administration/Appointments/add', AddAppointmentsComponent::class)->name('admin-Appointments-add');
    Route::get('/administration/Appointments/{slug}/edit', EditAppointmentsComponent::class)->name('admin-Appointments-edit');
    Route::get('/administration/Appointments/{slug}/show', ShowAppointmentsComponent::class)->name('admin-Appointments-show');
    //
    Route::get('/administration/Contacts', ContactsComponent::class)->name('admin-Contacts');
    Route::get('/administration/Contacts/add', AddContactsComponent::class)->name('admin-Contacts-add');
    Route::get('/administration/Contacts/{slug}/edit', EditContactsComponent::class)->name('admin-Contacts-edit');
    Route::get('/administration/Contacts/{slug}/show', ShowContactsComponent::class)->name('admin-Contacts-show');
    //
    Route::get('/administration/Blogs', BlogsComponent::class)->name('admin-Blogs');
    Route::get('/administration/Blogs/add', AddBlogsComponent::class)->name('admin-Blogs-add');
    Route::get('/administration/Blogs/{slug}/edit', EditBlogsComponent::class)->name('admin-Blogs-edit');
    Route::get('/administration/Blogs/{slug}/show', ShowBlogsComponent::class)->name('admin-Blogs-show');

    Route::get('/administration/settings/{slug}', SettingsComponent::class)->name('admin-settings');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified','authuser'])->group(function () {
    Route::get('/cabinet/dashboard', CabinetDashboardComponent::class)->name('cabinet-dashboard');

    Route::get('/cabinet/personals', PersonalsComponent::class)->name('cabinet-personals');
    Route::get('/cabinet/personals/add', AddPersonalsComponent::class)->name('cabinet-personals-add');
    Route::get('/cabinet/personals/{slug}/edit', EditPersonalsComponent::class)->name('cabinet-personals-edit');
    Route::get('/cabinet/personals/{slug}/show', ShowPersonalsComponent::class)->name('cabinet-personals-show');
    ///
    Route::get('/cabinet/patients', PatientsComponent::class)->name('cabinet-patients');
    Route::get('/cabinet/patients/add', AddPatientsComponent::class)->name('cabinet-patients-add');
    Route::get('/cabinet/patients/{slug}/edit', EditPatientsComponent::class)->name('cabinet-patients-edit');
    Route::get('/cabinet/patients/{slug}/show', ShowPatientsComponent::class)->name('cabinet-patients-show');
    ///
    Route::get('/cabinet/seances', SeancesComponent::class)->name('cabinet-seances');
    Route::get('/cabinet/seances/add', AddSeancesComponent::class)->name('cabinet-seances-add');
    Route::get('/cabinet/seances/{slug}/edit', EditSeancesComponent::class)->name('cabinet-seances-edit');
    Route::get('/cabinet/seances/{slug}/show', ShowSeancesComponent::class)->name('cabinet-seances-show');
    ///

    Route::get('/cabinet/MedicationCabinets', MedicationCabinetsComponent::class)->name('cabinet-MedicationCabinets');
    Route::get('/cabinet/MedicationCabinets/add', AddMedicationCabinetsComponent::class)->name('cabinet-MedicationCabinets-add');
    Route::get('/cabinet/MedicationCabinets/{slug}/edit', EditMedicationCabinetsComponent::class)->name('cabinet-MedicationCabinets-edit');
    Route::get('/cabinet/MedicationCabinets/{slug}/show', ShowMedicationCabinetsComponent::class)->name('cabinet-MedicationCabinets-show');

    ///
    Route::get('/cabinet/AppointmentCabinets', AppointmentCabinetsComponent::class)->name('cabinet-AppointmentCabinets');
    Route::get('/cabinet/AppointmentCabinets/add', AddAppointmentCabinetsComponent::class)->name('cabinet-AppointmentCabinets-add');
    Route::get('/cabinet/AppointmentCabinets/{slug}/edit', EditAppointmentCabinetsComponent::class)->name('cabinet-AppointmentCabinets-edit');
    Route::get('/cabinet/AppointmentCabinets/{slug}/show', ShowAppointmentCabinetsComponent::class)->name('cabinet-AppointmentCabinets-show');

    ///
    Route::get('/cabinet/arrangements', ArrangementsComponent::class)->name('cabinet-arrangements');
    Route::get('/cabinet/arrangements/add', AddArrangementsComponent::class)->name('cabinet-arrangements-add');
    Route::get('/cabinet/arrangements/{slug}/edit', EditArrangementsComponent::class)->name('cabinet-arrangements-edit');
    Route::get('/cabinet/arrangements/{slug}/show', ShowArrangementsComponent::class)->name('cabinet-arrangements-show');
    ///
    Route::get('/cabinet/payments', PaymentsComponent::class)->name('cabinet-payments');
    Route::get('/cabinet/payments/add', AddPaymentsComponent::class)->name('cabinet-payments-add');
    Route::get('/cabinet/payments/{slug}/edit', EditPaymentsComponent::class)->name('cabinet-payments-edit');
    Route::get('/cabinet/payments/{slug}/show', ShowPaymentsComponent::class)->name('cabinet-payments-show');
    ///
    Route::get('/cabinet/expenses', ExpensesComponent::class)->name('cabinet-expenses');
    Route::get('/cabinet/expenses/add', AddExpensesComponent::class)->name('cabinet-expenses-add');
    Route::get('/cabinet/expenses/{slug}/edit', EditExpensesComponent::class)->name('cabinet-expenses-edit');
    Route::get('/cabinet/expenses/{slug}/show', ShowExpensesComponent::class)->name('cabinet-expenses-show');

    ///
    Route::get('/cabinet/expensecategories', ExpenseCategoriesComponent::class)->name('cabinet-expensecategories');
    Route::get('/cabinet/expensecategories/add', AddExpenseCategoriesComponent::class)->name('cabinet-expensecategories-add');
    Route::get('/cabinet/expensecategories/{slug}/edit', EditExpenseCategoriesComponent::class)->name('cabinet-expensecategories-edit');
    Route::get('/cabinet/expensecategories/{slug}/show', ShowExpenseCategoriesComponent::class)->name('cabinet-expensecategories-show');
    ///
    Route::get('/cabinet/medicationcategories', MedicationCategoriesComponent::class)->name('cabinet-medicationcategories');
    Route::get('/cabinet/medicationcategories/add', AddMedicationCategoriesComponent::class)->name('cabinet-medicationcategories-add');
    Route::get('/cabinet/medicationcategories/{slug}/edit', EditMedicationCategoriesComponent::class)->name('cabinet-medicationcategories-edit');
    Route::get('/cabinet/medicationcategories/{slug}/show', ShowMedicationCategoriesComponent::class)->name('cabinet-medicationcategories-show');
    ///
    Route::get('/cabinet/grades', GradesComponent::class)->name('cabinet-grades');
    Route::get('/cabinet/grades/add', AddGradesComponent::class)->name('cabinet-grades-add');
    Route::get('/cabinet/grades/{slug}/edit', EditGradesComponent::class)->name('cabinet-grades-edit');
    Route::get('/cabinet/grades/{slug}/show', ShowGradesComponent::class)->name('cabinet-grades-show');
    ///
    Route::get('/cabinet/settingcabinets/{slug}', SettingCabinetsComponent::class)->name('cabinet-settingcabinets');

});


/*Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
}); */
