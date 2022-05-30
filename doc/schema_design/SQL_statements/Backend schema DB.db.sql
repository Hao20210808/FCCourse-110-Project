BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS "Patient ID" (
	"target_field"	INTEGER
);
CREATE TABLE IF NOT EXISTS "Patient Name" (
	"Fname"	TEXT,
	"Mname"	TEXT,
	"Lname"	TEXT
);
CREATE TABLE IF NOT EXISTS "Job occupation" (
	"Occupation ID"	INTEGER NOT NULL DEFAULT 0000,
	"Occupation Name"	TEXT DEFAULT 'non',
	"Workplace Environment"	TEXT,
	FOREIGN KEY("Workplace Environment") REFERENCES "JobEntity"("name")
);
CREATE TABLE IF NOT EXISTS "Confirmed Patient" (
	"Patient Id"	INTEGER NOT NULL DEFAULT 00000000,
	"Name"	TEXT NOT NULL DEFAULT 'name' COLLATE UTF16,
	"Age"	INTEGER NOT NULL DEFAULT 00,
	"Job occupation"	TEXT,
	FOREIGN KEY("Patient Id") REFERENCES "Patient ID"("target_field"),
	FOREIGN KEY("Name") REFERENCES "Patient Name",
	PRIMARY KEY("Patient Id")
);
CREATE TABLE IF NOT EXISTS "BottleFieldEntity" (
	"field_name"	TEXT,
	"field_type"	TEXT,
	"target_type"	TEXT
);
CREATE TABLE IF NOT EXISTS "CondenserEntity" (
	"Name"	TEXT
);
CREATE TABLE IF NOT EXISTS "BottleField" (
	"id"	INTEGER,
	"embedded_doc"	TEXT,
	"field_name"	INTEGER,
	"field_type"	INTEGER,
	"target_type"	INTEGER,
	FOREIGN KEY("embedded_doc") REFERENCES "BottleFieldEntity",
	FOREIGN KEY("field_name") REFERENCES "CondenserEntity"("Name"),
	PRIMARY KEY("id")
);
CREATE TABLE IF NOT EXISTS "JobEntity" (
	"bottle"	TEXT,
	"name"	TEXT,
	FOREIGN KEY("bottle") REFERENCES "CondenserEntity"("Name")
);
CREATE TABLE IF NOT EXISTS "DataBase" (
	"Data_Field"	INTEGER,
	"Sourse_Field"	INTEGER,
	"method"	TEXT,
	"Fold_id"	INTEGER,
	"Folder_name"	TEXT,
	FOREIGN KEY("Data_Field") REFERENCES "Confirmed Patient"
);
CREATE TABLE IF NOT EXISTS "EntityUnit" (
	"formatter"	TEXT,
	"method"	TEXT,
	"name"	TEXT,
	"regex"	TEXT,
	"sourse_fields"	TEXT
);
CREATE TABLE IF NOT EXISTS "DataParser" (
	"id"	INTEGER,
	"formatter"	TEXT,
	"method"	TEXT,
	"name"	TEXT,
	"regex"	TEXT,
	"Sourse_fields"	INTEGER,
	FOREIGN KEY("formatter") REFERENCES "EntityUnit"("formatter"),
	FOREIGN KEY("method") REFERENCES "EntityUnit"("method"),
	FOREIGN KEY("regex") REFERENCES "EntityUnit"("regex"),
	FOREIGN KEY("name") REFERENCES "EntityUnit"("name"),
	FOREIGN KEY("Sourse_fields") REFERENCES "EntityUnit"("sourse_fields")
);
COMMIT;
