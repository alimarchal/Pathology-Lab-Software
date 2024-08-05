<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tests = [
            ['name' => 'Complete Blood Count (CBC)', 'description' => 'A comprehensive assessment of overall health and a variety of disorders, including anemia, infection, and more.', 'unit_id' => 1],
            ['name' => 'White Blood Cell Differential Count', 'description' => 'Measures the percentage of different types of white blood cells.', 'unit_id' => 13],
            ['name' => 'Red Cell Distribution Width (RDW)', 'description' => 'Indicates variation in red blood cell size or volume.', 'unit_id' => 62],
            ['name' => 'Reticulocyte Count', 'description' => 'Measures the number of young red blood cells to assess bone marrow function.', 'unit_id' => 12],
            ['name' => 'Erythrocyte Sedimentation Rate (ESR)', 'description' => 'Measures the rate at which red blood cells sediment in a period, indicating inflammation.', 'unit_id' => 10],
            ['name' => 'C-Reactive Protein (CRP)', 'description' => 'Indicates inflammation or infection in the body.', 'unit_id' => 1],
            ['name' => 'Prothrombin Time (PT)', 'description' => 'Measures how long it takes blood to clot, evaluating bleeding disorders.', 'unit_id' => 11],
            ['name' => 'International Normalized Ratio (INR)', 'description' => 'Standardized number that is calculated from a PT result.', 'unit_id' => 54],
            ['name' => 'Activated Partial Thromboplastin Time (aPTT)', 'description' => 'Evaluates the intrinsic pathway of coagulation.', 'unit_id' => 11],
            ['name' => 'Fibrinogen', 'description' => 'Essential protein for blood clot formation.', 'unit_id' => 3],
            ['name' => 'D-Dimer', 'description' => 'Indicates clot degradation, often used in diagnosing thrombosis.', 'unit_id' => 1],
            ['name' => 'Hemoglobin Electrophoresis', 'description' => 'Differentiates types of hemoglobin and detects hemoglobinopathies.', 'unit_id' => 62],
            ['name' => 'Blood Smear', 'description' => 'Microscopic evaluation of blood cells to detect abnormalities.', 'unit_id' => 62],
            ['name' => 'Bone Marrow Aspiration and Biopsy', 'description' => 'Examines marrow for diagnosing blood disorders and diseases.', 'unit_id' => 54],
            ['name' => 'Lactate Dehydrogenase (LDH)', 'description' => 'Indicates tissue damage or disease.', 'unit_id' => 6],
            ['name' => 'Ferritin', 'description' => 'Reflects body iron stores.', 'unit_id' => 5],
            ['name' => 'Transferrin', 'description' => 'Indicates iron-binding capacity and iron metabolism.', 'unit_id' => 2],
            ['name' => 'Total Iron Binding Capacity (TIBC)', 'description' => 'Measures the blood’s capacity to bind iron.', 'unit_id' => 17],
            ['name' => 'Serum Iron', 'description' => 'Measures the amount of iron in the blood.', 'unit_id' => 1],
            ['name' => 'Haptoglobin', 'description' => 'Evaluates hemolytic anemia.', 'unit_id' => 20],
            ['name' => 'Coombs Test (Direct and Indirect)', 'description' => 'Detects antibodies against red blood cells.', 'unit_id' => 54],
            ['name' => 'Vitamin B12', 'description' => 'Assesses vitamin B12 levels, crucial for red blood cell formation.', 'unit_id' => 5],
            ['name' => 'Folate', 'description' => 'Assesses folate levels, vital for red blood cell formation.', 'unit_id' => 23],
            ['name' => 'Erythropoietin', 'description' => 'Measures the hormone responsible for red blood cell production.', 'unit_id' => 46],
            ['name' => 'G6PD (Glucose-6-Phosphate Dehydrogenase)', 'description' => 'Evaluates enzyme deficiency leading to hemolytic anemia.', 'unit_id' => 69],
            ['name' => 'Hemoglobin A1c', 'description' => 'Indicates average blood glucose levels over time.', 'unit_id' => 9],
            ['name' => 'Antithrombin III', 'description' => 'Measures the level of antithrombin, a blood protein that helps regulate blood clotting.', 'unit_id' => 8],
            ['name' => 'Factor V Leiden Mutation Test', 'description' => 'Genetic test for a mutation that increases the risk of blood clots.', 'unit_id' => 54],
            ['name' => 'Protein C and Protein S Activity', 'description' => 'Evaluates proteins involved in preventing blood clots.', 'unit_id' => 3],
            ['name' => 'Thrombin Time (TT)', 'description' => 'Measures the time it takes for a clot to form in the plasma.', 'unit_id' => 11],
            ['name' => 'Eosinophil Count', 'description' => 'Measures the number of eosinophils, which may indicate allergies or infections.', 'unit_id' => 13],
            ['name' => 'Basophil Count', 'description' => 'Measures the number of basophils, which may indicate allergies or inflammation.', 'unit_id' => 13],
            ['name' => 'Myeloperoxidase (MPO)', 'description' => 'Evaluates myeloperoxidase activity related to inflammation.', 'unit_id' => 1],
            ['name' => 'Neutrophil Elastase', 'description' => 'Measures neutrophil activity and inflammation.', 'unit_id' => 5],
            ['name' => 'Anti-Neutrophil Cytoplasmic Antibody (ANCA)', 'description' => 'Detects antibodies against neutrophils, associated with vasculitis.', 'unit_id' => 54],
            ['name' => 'Von Willebrand Factor (vWF)', 'description' => 'Measures a protein crucial for blood clotting.', 'unit_id' => 29],
            ['name' => 'Platelet Aggregation Test', 'description' => 'Assesses platelet function and aggregation.', 'unit_id' => 54],
            ['name' => 'Soluble Transferrin Receptor (sTfR)', 'description' => 'Reflects iron deficiency anemia.', 'unit_id' => 5],
            ['name' => 'Hematocrit', 'description' => 'Measures the percentage of blood volume occupied by red blood cells.', 'unit_id' => 10],
            ['name' => 'Neutrophil Count', 'description' => 'Measures the number of neutrophils, indicating infection or inflammation.', 'unit_id' => 13],
            ['name' => 'Lymphocyte Count', 'description' => 'Measures the number of lymphocytes, indicating immune response.', 'unit_id' => 13],
            ['name' => 'Monocyte Count', 'description' => 'Measures the number of monocytes, indicating chronic inflammation.', 'unit_id' => 13],
            ['name' => 'Eosinophil Peroxidase (EPO)', 'description' => 'Evaluates eosinophil activity related to allergies or infections.', 'unit_id' => 6],
            ['name' => 'Basophil Degranulation Test', 'description' => 'Assesses basophil response to allergens.', 'unit_id' => 54],
            ['name' => 'Hematopoietic Stem Cell Count', 'description' => 'Measures stem cells for bone marrow function.', 'unit_id' => 13],
            ['name' => 'Cellularity', 'description' => 'Assesses bone marrow cellularity.', 'unit_id' => 62],
            ['name' => 'Plasma Viscosity', 'description' => 'Measures the thickness of plasma, indicating inflammation.', 'unit_id' => 14],
            ['name' => 'Thrombopoietin', 'description' => 'Measures the hormone regulating platelet production.', 'unit_id' => 5],
            ['name' => 'Absolute Lymphocyte Count (ALC)', 'description' => 'Measures the total lymphocyte count.', 'unit_id' => 13],
            ['name' => 'Absolute Neutrophil Count (ANC)', 'description' => 'Measures the total neutrophil count.', 'unit_id' => 13],
            ['name' => 'Absolute Monocyte Count (AMC)', 'description' => 'Measures the total monocyte count.', 'unit_id' => 13],
            ['name' => 'Immature Granulocyte Count', 'description' => 'Measures immature granulocytes, indicating infection or stress.', 'unit_id' => 13],
            ['name' => 'Iron Studies (Serum Iron, TIBC, Ferritin)', 'description' => 'Comprehensive assessment of iron status.', 'unit_id' => 1],
            ['name' => 'Plasma Hemoglobin', 'description' => 'Measures free hemoglobin in plasma, indicating hemolysis.', 'unit_id' => 3],
            ['name' => 'Leukocyte Alkaline Phosphatase (LAP)', 'description' => 'Assesses leukocyte function.', 'unit_id' => 11],
            ['name' => 'Mean Platelet Volume (MPV)', 'description' => 'Measures the average size of platelets.', 'unit_id' => 11],
            ['name' => 'Platelet Distribution Width (PDW)', 'description' => 'Measures variation in platelet size.', 'unit_id' => 62],
            ['name' => 'Beta-2 Microglobulin', 'description' => 'Reflects cell turnover, often used in lymphoma.', 'unit_id' => 1],
            ['name' => 'Hematology Cancer Panels (e.g., Lymphoma, Leukemia)', 'description' => 'Genetic and protein analysis for cancer diagnosis.', 'unit_id' => 54],
            ['name' => 'Serum Free Light Chains (FLC)', 'description' => 'Assesses immunoglobulin light chains for multiple myeloma.', 'unit_id' => 1],
            ['name' => 'Hematocrit to Hemoglobin Ratio (Hct/Hb)', 'description' => 'Evaluates red blood cell concentration.', 'unit_id' => 62],
            ['name' => 'Hemoglobin Concentration', 'description' => 'Measures the amount of hemoglobin in blood.', 'unit_id' => 3],
            ['name' => 'Cytokine Panels (e.g., IL-6, TNF-alpha)', 'description' => 'Measures cytokines, indicating immune response.', 'unit_id' => 4],
            ['name' => 'Plasma Cell Dyscrasia Panel', 'description' => 'Evaluates plasma cell disorders.', 'unit_id' => 54],
            ['name' => 'JAK2 Mutation Analysis', 'description' => 'Genetic test for myeloproliferative disorders.', 'unit_id' => 54],
            ['name' => 'Eosinophil Cationic Protein (ECP)', 'description' => 'Indicates eosinophil activity in allergic diseases.', 'unit_id' => 5],
            ['name' => 'Peroxidase Stain', 'description' => 'Identifies specific cell types in blood.', 'unit_id' => 54],
            ['name' => 'Flow Cytometry Analysis', 'description' => 'Characterizes blood cells by type and surface markers.', 'unit_id' => 54],
            ['name' => 'Red Cell Indices (MCV, MCH, MCHC)', 'description' => 'Detailed analysis of red blood cell characteristics.', 'unit_id' => 62],
            ['name' => 'Antiphospholipid Antibodies', 'description' => 'Detects antibodies linked to clotting disorders.', 'unit_id' => 54],
            ['name' => 'Complete Blood Count with Differential', 'description' => 'Comprehensive analysis of blood cells, including differential.', 'unit_id' => 13],
            ['name' => 'Blood Typing (ABO and Rh)', 'description' => 'Determines blood type and Rh factor.', 'unit_id' => 54],
            ['name' => 'Microcytic Anemia Panel', 'description' => 'Evaluates microcytic anemia causes.', 'unit_id' => 54],
            ['name' => 'Macrocytic Anemia Panel', 'description' => 'Evaluates macrocytic anemia causes.', 'unit_id' => 54],
            ['name' => 'Normocytic Anemia Panel', 'description' => 'Evaluates normocytic anemia causes.', 'unit_id' => 54],
            ['name' => 'Serum Erythropoietin Level', 'description' => 'Measures erythropoietin levels for anemia evaluation.', 'unit_id' => 46],
            ['name' => 'Thalassemia Testing', 'description' => 'Genetic analysis for thalassemia disorders.', 'unit_id' => 54],
            ['name' => 'Sickle Cell Screening', 'description' => 'Detects sickle cell trait or disease.', 'unit_id' => 54],
            ['name' => 'Glycated Hemoglobin (HbA1c)', 'description' => 'Assesses average blood sugar levels over time.', 'unit_id' => 1],
            ['name' => 'Fibrinolysis Panel', 'description' => 'Assesses the fibrinolytic pathway and clot breakdown.', 'unit_id' => 54],
            ['name' => 'Hepcidin', 'description' => 'Measures the hormone regulating iron metabolism.', 'unit_id' => 5],
            ['name' => 'Serum Heparin Assay', 'description' => 'Measures heparin levels, evaluating anticoagulant therapy.', 'unit_id' => 3],
            ['name' => 'Erythrocyte Protoporphyrin', 'description' => 'Evaluates lead poisoning or iron deficiency.', 'unit_id' => 1],
            ['name' => 'Serum Bilirubin', 'description' => 'Measures bilirubin levels, indicating liver function.', 'unit_id' => 3],
            ['name' => 'Soluble CD163', 'description' => 'Reflects macrophage activation, often in hemolytic disorders.', 'unit_id' => 1],
//            ['name' => 'Blood Gas Analysis', 'description' => 'Measures oxygen, carbon dioxide, and pH levels in the blood.', 'unit_id' => 86],
            ['name' => 'Red Cell Osmotic Fragility Test', 'description' => 'Assesses red blood cell membrane stability.', 'unit_id' => 54],
            ['name' => 'Coagulation Factor Assays (e.g., Factor VIII, IX)', 'description' => 'Evaluates specific coagulation factor levels.', 'unit_id' => 68],
            ['name' => 'Serum Amyloid A', 'description' => 'Reflects acute-phase response in inflammation.', 'unit_id' => 1],
            ['name' => 'Thrombocytopenia Panel', 'description' => 'Evaluates causes of low platelet count.', 'unit_id' => 54],
            ['name' => 'Mean Corpuscular Hemoglobin (MCH)', 'description' => 'Measures the average amount of hemoglobin per red blood cell.', 'unit_id' => 11],
            ['name' => 'Iron Overload Panel', 'description' => 'Evaluates iron overload and related disorders.', 'unit_id' => 54],
            ['name' => 'Platelet Function Tests', 'description' => 'Assesses platelet function in clotting.', 'unit_id' => 54],
            ['name' => 'Anemia Panel', 'description' => 'Comprehensive evaluation of anemia causes.', 'unit_id' => 54],
            ['name' => 'Hemolysis Panel', 'description' => 'Assesses hemolytic anemia and related disorders.', 'unit_id' => 54],
            ['name' => 'Mast Cell Tryptase', 'description' => 'Measures tryptase levels, indicating mast cell activation.', 'unit_id' => 5],
            ['name' => 'Beta Thalassemia Testing', 'description' => 'Genetic analysis for beta thalassemia disorders.', 'unit_id' => 54],
            ['name' => 'Paroxysmal Nocturnal Hemoglobinuria (PNH)', 'description' => 'Evaluates red blood cell destruction disorder.', 'unit_id' => 54],
            ['name' => 'Serum Sickness Panel', 'description' => 'Evaluates immune complex diseases.', 'unit_id' => 54],
            ['name' => 'Neutrophil Alkaline Phosphatase (NAP) Score', 'description' => 'Assesses neutrophil function in inflammation.', 'unit_id' => 11],
            ['name' => 'Red Blood Cell Antibody Screen', 'description' => 'Detects antibodies against red blood cells.', 'unit_id' => 54],
            ['name' => 'Hemoglobin F (Fetal Hemoglobin)', 'description' => 'Measures fetal hemoglobin levels.', 'unit_id' => 9],
            ['name' => 'Glucose-6-Phosphate Dehydrogenase (G6PD) Quantitative', 'description' => 'Quantifies enzyme activity in red blood cells.', 'unit_id' => 69],
            ['name' => 'Heinz Body Stain', 'description' => 'Detects denatured hemoglobin in red blood cells.', 'unit_id' => 54],
            ['name' => 'Anion Gap', 'description' => 'Evaluates acid-base balance in the body.', 'unit_id' => 9],
            ['name' => 'Serum Immunoglobulins (IgG, IgA, IgM)', 'description' => 'Measures immunoglobulin levels for immune function.', 'unit_id' => 3],
            ['name' => 'Cryoglobulins', 'description' => 'Detects abnormal proteins in the blood, indicating inflammation.', 'unit_id' => 54],
            ['name' => 'Primary Myelofibrosis Panel', 'description' => 'Evaluates genetic mutations related to myelofibrosis.', 'unit_id' => 54],
            ['name' => 'Serum Protein Electrophoresis (SPEP)', 'description' => 'Separates blood proteins for disease diagnosis.', 'unit_id' => 62],
//            ['name' => 'Capillary Blood Gas Analysis', 'description' => 'Measures blood gases from a capillary sample.', 'unit_id' => 86],
            ['name' => 'Hematology Malignancy Panels (e.g., Leukemia, Lymphoma)', 'description' => 'Genetic analysis for hematological malignancies.', 'unit_id' => 54],
            ['name' => 'Chronic Lymphocytic Leukemia (CLL) Panel', 'description' => 'Evaluates genetic markers for CLL diagnosis.', 'unit_id' => 54],
            ['name' => 'Red Cell Volume', 'description' => 'Measures the volume of red blood cells in the blood.', 'unit_id' => 15],
            ['name' => 'White Cell Enzyme Assays', 'description' => 'Evaluates enzyme activity in white blood cells.', 'unit_id' => 6],
            ['name' => 'Neutrophil Count with Bands', 'description' => 'Measures neutrophils and immature bands, indicating infection.', 'unit_id' => 13],
            ['name' => 'Hereditary Hemochromatosis Genetic Test', 'description' => 'Genetic analysis for iron overload disorder.', 'unit_id' => 54],
            ['name' => 'Serum Free Hemoglobin', 'description' => 'Measures free hemoglobin in serum, indicating hemolysis.', 'unit_id' => 3],
            ['name' => 'Serum Hemopexin', 'description' => 'Evaluates hemopexin levels related to hemolysis.', 'unit_id' => 20],
            ['name' => 'Complement Component 3 (C3)', 'description' => 'Measures C3 levels in the immune system.', 'unit_id' => 1],
            ['name' => 'Complement Component 4 (C4)', 'description' => 'Measures C4 levels in the immune system.', 'unit_id' => 1],
            ['name' => 'Primary Hemostasis Tests', 'description' => 'Evaluates the initial phase of blood clotting.', 'unit_id' => 54],
            ['name' => 'Secondary Hemostasis Tests', 'description' => 'Evaluates the coagulation cascade for clot formation.', 'unit_id' => 54],
            ['name' => 'Mean Corpuscular Volume (MCV)', 'description' => 'Measures the average size of red blood cells.', 'unit_id' => 11],
            ['name' => 'Mean Corpuscular Hemoglobin Concentration (MCHC)', 'description' => 'Measures the concentration of hemoglobin in red blood cells.', 'unit_id' => 3],
            ['name' => 'Platelet Antibody Testing', 'description' => 'Detects antibodies against platelets, indicating autoimmune disorders.', 'unit_id' => 54],
            ['name' => 'Eosinophil Degranulation Products', 'description' => 'Measures eosinophil activity in allergic reactions.', 'unit_id' => 54],
            ['name' => 'Neutrophil Activation Markers', 'description' => 'Evaluates markers of neutrophil activation in inflammation.', 'unit_id' => 54],
            ['name' => 'Myeloproliferative Neoplasm Panel', 'description' => 'Evaluates genetic mutations in myeloproliferative disorders.', 'unit_id' => 54],
            ['name' => 'Peripheral Blood Stem Cell Count', 'description' => 'Measures stem cells in the peripheral blood.', 'unit_id' => 13],
            ['name' => 'Serum Albumin', 'description' => 'Measures albumin levels, indicating nutritional status.', 'unit_id' => 3],
            ['name' => 'Leukocyte Esterase', 'description' => 'Detects leukocyte activity in urine, indicating infection.', 'unit_id' => 54],
            ['name' => 'Red Cell Folate', 'description' => 'Measures folate levels in red blood cells.', 'unit_id' => 5],
            ['name' => 'Hematology Flow Cytometry Panel', 'description' => 'Characterizes blood cells using flow cytometry.', 'unit_id' => 54],
            ['name' => 'Molecular Hematology Tests', 'description' => 'Genetic and molecular analysis for hematological disorders.', 'unit_id' => 54],
            ['name' => 'Neutrophil CD64 Expression', 'description' => 'Measures CD64 expression on neutrophils, indicating infection.', 'unit_id' => 54],
            ['name' => 'Neutrophil Function Tests', 'description' => 'Evaluates neutrophil activity and response to stimuli.', 'unit_id' => 54],
            ['name' => 'Plasma Cell Count', 'description' => 'Measures the number of plasma cells in the blood.', 'unit_id' => 13],
            ['name' => 'Rheumatoid Factor (RF)', 'description' => 'Detects rheumatoid factor, indicating autoimmune disorders.', 'unit_id' => 29],
            ['name' => 'Serum Free Fatty Acids', 'description' => 'Measures free fatty acids in the blood.', 'unit_id' => 2],
            ['name' => 'Plasma Homocysteine', 'description' => 'Measures homocysteine levels, indicating cardiovascular risk.', 'unit_id' => 16],
            ['name' => 'Serum Angiotensin-Converting Enzyme (ACE)', 'description' => 'Measures ACE levels, indicating sarcoidosis or other disorders.', 'unit_id' => 6],
            ['name' => 'Neutrophil Oxidative Burst Test', 'description' => 'Evaluates neutrophil response to oxidative stress.', 'unit_id' => 54],
            ['name' => 'Hematology Cancer Staging Panels', 'description' => 'Evaluates genetic markers for cancer staging.', 'unit_id' => 54],
            ['name' => 'Peripheral Blood Smear Review', 'description' => 'Microscopic evaluation of blood smear for abnormalities.', 'unit_id' => 54],
            ['name' => 'Antithrombin Activity', 'description' => 'Measures antithrombin activity in coagulation.', 'unit_id' => 29],
            ['name' => 'Protein C Activity', 'description' => 'Measures protein C activity in coagulation.', 'unit_id' => 29],
            ['name' => 'Protein S Activity', 'description' => 'Measures protein S activity in coagulation.', 'unit_id' => 29],
            ['name' => 'Activated Protein C Resistance (APCR)', 'description' => 'Evaluates resistance to activated protein C, indicating clotting disorders.', 'unit_id' => 62],
            ['name' => 'Hemoglobinopathies Screening', 'description' => 'Detects hemoglobin disorders like sickle cell anemia.', 'unit_id' => 54],
            ['name' => 'Autoimmune Hemolytic Anemia Panel', 'description' => 'Evaluates autoimmune causes of hemolytic anemia.', 'unit_id' => 54],
            ['name' => 'Serum Immunoglobulin G Subclasses', 'description' => 'Measures IgG subclasses, indicating immune deficiencies.', 'unit_id' => 3],
            ['name' => 'Plasma Viscosity Measurement', 'description' => 'Measures plasma viscosity, indicating inflammation.', 'unit_id' => 14],
            ['name' => 'Neutrophil Extracellular Trap (NET) Assay', 'description' => 'Evaluates neutrophil extracellular trap formation in inflammation.', 'unit_id' => 54],
            ['name' => 'Red Cell Enzyme Deficiency Panel', 'description' => 'Evaluates red cell enzyme deficiencies causing hemolysis.', 'unit_id' => 54],
            ['name' => 'Hematology Transfusion Reaction Panel', 'description' => 'Evaluates transfusion reactions and related complications.', 'unit_id' => 54],
            ['name' => 'Red Cell Antigen Typing', 'description' => 'Determines red cell antigen types for transfusion compatibility.', 'unit_id' => 54],
            ['name' => 'Cryofibrinogen', 'description' => 'Detects abnormal fibrinogen, indicating clotting disorders.', 'unit_id' => 54],
            ['name' => 'Neutrophil Phagocytosis Assay', 'description' => 'Evaluates neutrophil phagocytosis activity.', 'unit_id' => 54],
            ['name' => 'Immune Thrombocytopenic Purpura (ITP) Panel', 'description' => 'Evaluates immune causes of thrombocytopenia.', 'unit_id' => 54],
            ['name' => 'Serum Lactate', 'description' => 'Measures lactate levels, indicating tissue oxygenation.', 'unit_id' => 16],
            ['name' => 'Serum Aldolase', 'description' => 'Measures aldolase levels, indicating muscle damage.', 'unit_id' => 6],
            ['name' => 'Red Cell Autoantibody Panel', 'description' => 'Detects autoantibodies against red blood cells.', 'unit_id' => 54],
            ['name' => 'Neutrophil Reactive Oxygen Species (ROS) Production', 'description' => 'Measures ROS production by neutrophils in oxidative stress.', 'unit_id' => 54],
            ['name' => 'Peripheral Blood Lymphocyte Subset Analysis', 'description' => 'Characterizes lymphocyte subsets in the blood.', 'unit_id' => 54],
            ['name' => 'Serum Ammonia', 'description' => 'Measures ammonia levels, indicating liver function.', 'unit_id' => 16],
            ['name' => 'Hematology Genetic Testing', 'description' => 'Genetic analysis for hematological disorders.', 'unit_id' => 54],
            ['name' => 'Platelet Count', 'description' => 'Measures the number of platelets in the blood.', 'unit_id' => 13],
            ['name' => 'Serum Albumin to Globulin Ratio', 'description' => 'Evaluates the ratio of albumin to globulin in serum.', 'unit_id' => 62],
            ['name' => 'Neutrophil Chemotaxis Assay', 'description' => 'Evaluates neutrophil chemotaxis and response to stimuli.', 'unit_id' => 54],
            ['name' => 'Folate Metabolism Panel', 'description' => 'Evaluates folate metabolism and related disorders.', 'unit_id' => 54],
            ['name' => 'Hemoglobin Variant Analysis', 'description' => 'Detects hemoglobin variants and abnormalities.', 'unit_id' => 54],
            ['name' => 'Lymphocyte Transformation Test', 'description' => 'Evaluates lymphocyte response to stimuli.', 'unit_id' => 54],
            ['name' => 'Serum Complement Levels', 'description' => 'Measures complement levels, indicating immune response.', 'unit_id' => 1],
            ['name' => 'Erythrocyte Sedimentation Rate (ESR)', 'description' => 'Measures the rate at which red blood cells sediment, indicating inflammation.', 'unit_id' => 10],
            ['name' => 'Molecular Diagnostics in Hematology', 'description' => 'Genetic and molecular analysis for hematological diseases.', 'unit_id' => 54],
            ['name' => 'Neutrophil Degranulation Assay', 'description' => 'Evaluates neutrophil degranulation in response to stimuli.', 'unit_id' => 54],
            ['name' => 'Serum Uric Acid', 'description' => 'Measures uric acid levels, indicating gout or kidney function.', 'unit_id' => 1],
            ['name' => 'Hematology Quality Control Tests', 'description' => 'Ensures accuracy and precision of hematology tests.', 'unit_id' => 54],
            ['name' => 'Fibrin Degradation Products (FDP)', 'description' => 'Measures products of fibrin breakdown, indicating clot dissolution.', 'unit_id' => 1],
            ['name' => 'Hematology Cytogenetics', 'description' => 'Chromosomal analysis for hematological disorders.', 'unit_id' => 54],
            ['name' => 'Serum Total Protein', 'description' => 'Measures total protein levels, indicating nutritional status.', 'unit_id' => 3],
            ['name' => 'Red Cell Alloantibody Screen', 'description' => 'Detects alloantibodies against red blood cells.', 'unit_id' => 54],
            ['name' => 'Serum Creatinine', 'description' => 'Measures creatinine levels, indicating kidney function.', 'unit_id' => 1],
            ['name' => 'Hematology Cell Culture', 'description' => 'Grows hematological cells for analysis.', 'unit_id' => 54],
            ['name' => 'Serum Zinc', 'description' => 'Measures zinc levels, indicating nutritional status.', 'unit_id' => 7],
            ['name' => 'Serum Copper', 'description' => 'Measures copper levels, indicating nutritional status.', 'unit_id' => 7],
            ['name' => 'Serum Selenium', 'description' => 'Measures selenium levels, indicating nutritional status.', 'unit_id' => 19],
            ['name' => 'Neutrophil Apoptosis Assay', 'description' => 'Evaluates neutrophil apoptosis and cell death.', 'unit_id' => 54],
            ['name' => 'Serum Cortisol', 'description' => 'Measures cortisol levels, indicating adrenal function.', 'unit_id' => 8],
            ['name' => 'Hematology Immunophenotyping', 'description' => 'Characterizes blood cells using surface markers.', 'unit_id' => 54],
            ['name' => 'Serum Carcinoembryonic Antigen (CEA)', 'description' => 'Measures CEA levels, indicating cancer presence.', 'unit_id' => 5],
            ['name' => 'Serum Alpha-Fetoprotein (AFP)', 'description' => 'Measures AFP levels, indicating liver cancer or germ cell tumors.', 'unit_id' => 5],
            ['name' => 'Serum Prostate-Specific Antigen (PSA)', 'description' => 'Measures PSA levels, indicating prostate cancer.', 'unit_id' => 5],
            ['name' => 'Serum Cancer Antigen 125 (CA-125)', 'description' => 'Measures CA-125 levels, indicating ovarian cancer.', 'unit_id' => 5],
            ['name' => 'Serum Cancer Antigen 19-9 (CA 19-9)', 'description' => 'Measures CA 19-9 levels, indicating pancreatic cancer.', 'unit_id' => 5],
            ['name' => 'Serum Cancer Antigen 15-3 (CA 15-3)', 'description' => 'Measures CA 15-3 levels, indicating breast cancer.', 'unit_id' => 5],
            ['name' => 'Serum Cancer Antigen 72-4 (CA 72-4)', 'description' => 'Measures CA 72-4 levels, indicating gastric cancer.', 'unit_id' => 5],
            ['name' => 'Serum Cancer Antigen 27-29 (CA 27-29)', 'description' => 'Measures CA 27-29 levels, indicating breast cancer.', 'unit_id' => 5],
            ['name' => 'Serum Chromogranin A', 'description' => 'Measures chromogranin A levels, indicating neuroendocrine tumors.', 'unit_id' => 5],
            ['name' => 'Serum Neuron-Specific Enolase (NSE)', 'description' => 'Measures NSE levels, indicating neuroblastoma or small cell lung cancer.', 'unit_id' => 5],
        ];

        DB::table('tests')->insert($tests);
    }
}
