gcloud sql instances describe aotc-laravel-instance

gsutil iam ch serviceAccount:p943774537570-g212n6@gcp-sa-cloud-sql.iam.gserviceaccount.com:objectAdmin \gs://aotc-laravel-sql

gcloud sql import sql [INSTANCE_NAME] gs://[BUCKET_NAME]/[IMPORT_FILE_NAME] \
                            --database=[DATABASE_NAME]