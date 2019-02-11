# HospitalTracker

This webpage is meant to simulate a helpful tool for a Doctor's office to track their patients and their visits/diagnosis.
Connects to a local phpmyadmin database.

Doctor:
* A doctor is able to register to the system by clicking the Register button.
* Once registered, the doctor can see all patients assigned to him by clicking the Doctor link.
* Here, they will see a list of all patients assigned to them and a button labeled "Treat".
* Pushing the Treat button will prompt the Doctor to assign a diagnosis for the patient.
* Once "Submit Treatment" button is pressed, the Doctor will see the list of remaining patients.

Receptionist:
* Clicking the Receptionist link will bring up a table displaying the patients visiting the hospital.
* The table shows the patientID, their name, Insurance provider, and the status.
* If the patient is currently at the Hospital, the Check-in button can be used to update their status.
* When you press the Check-In button, you will be asked which Doctor to assign the patient too. 

Patient:
* Clicking the patient link will show all available patients who have visited the Hospital.
* Here we can add patients individually and add them to the system.
