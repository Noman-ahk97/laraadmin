<?php
/**
 * Migration genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Dwij\Laraadmin\Models\Module;
use Dwij\Laraadmin\Models\ModuleFields;
use App\Role;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Module::generate("Roles", 'roles', 'name', [
            ["name", "Name", "Name", false, "", 1, 256, true],
            ["name_short", "Short Name", "String", false, "", 0, 256, true],
            ["parent", "Parent Role", "Dropdown", false, 3, 0, 0, false, "@roles"],
            ["dept", "Department", "Dropdown", false, 3, 0, 0, false, "@department"],
        ]);
        
        $row = new Role;
        $row->name = "Super Admin";
        $row->name_short = "SUPER_ADMIN";
        $row->parent = 0;
        $row->dept = 1;
        $row->save();
        
		/*
		Row Format:
		["field_name_db", "Label", "UI Type", "Readonly", "Default_Value", "min_length", "max_length", "Required", "Pop_values"]
		Module::generate("Module_ Name", "Table_Name", "view_column_name" []);
        
		Module::generate("Books", 'books', 'name', [
            ["address", "Address", "Address", false, "", 0, 1000, true],
            ["restricted", "Restricted", "Checkbox", false, false, 0, 0, false],
            ["price", "Price", "Currency", false, 0.0, 0, 0, true],
            ["date_release", "Date of Release", "Date", false, "date('Y-m-d')", 0, 0, false],
            ["time_started", "Start Time", "Datetime", false, "date('Y-m-d H:i:s')", 0, 0, false],
            ["weight", "Weight", "Decimal", false, 0.0, 0, 20, true],
            ["publisher", "Publisher", "Dropdown", false, "Marvel", 0, 0, false, ["Bloomsbury","Marvel","Universal"]],
            ["publisher", "Publisher", "Dropdown", false, 3, 0, 0, false, "@publishers"],
            ["email", "Email", "Email", false, "", 0, 0, false],
            ["file", "File", "File", false, "", 0, 256, false],
            ["weight", "Weight", "Float", false, 0.0, 0, 20.00, true],
            ["biography", "Biography", "HTML", false, "<p>This is description</p>", 0, 0, true],
            ["profile_image", "Profile Image", "Image", false, "img_path.jpg", 0, 256, false],
            ["pages", "Pages", "Integer", false, 0, 0, 5000, false],
            ["mobile", "Mobile", "Mobile", false, "+91 8888888888", 0, 20, false],
            ["media_type", "Media Type", "Multiselect", false, ["Audiobook"], 0, 0, false, ["Print","Audiobook","E-book"]],
            ["media_type", "Media Type", "Multiselect", false, [2,3], 0, 0, false, @media_types],
            ["name", "Name", "Name", false, "John Doe", 5, 256, true],
            ["password", "Password", "Password", false, "", 6, 256, true],
            ["status", "Status", "Radio", false, "Published", 0, 0, false, ["Draft","Published","Unpublished"]],
            ["author", "Author", "String", false, "JRR Tolkien", 0, 256, true],
            ["genre", "Genre", "Taginput", false, ["Fantacy","Adventure"], 0, 0, false],
            ["description", "Description", "Textarea", false, "", 0, 1000, false],
            ["short_intro", "Short Introduction", "TextField", false, "", 5, 256, true],
            ["website", "Website", "URL", false, "http://dwij.in", 0, 0, false],
        ]);
		*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('roles')) {
            Schema::drop('roles');
        }
    }
}