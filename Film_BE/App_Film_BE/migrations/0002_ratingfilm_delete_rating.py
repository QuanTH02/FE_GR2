# Generated by Django 5.0.1 on 2024-01-16 11:38

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('App_Film_BE', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='RatingFilm',
            fields=[
                ('rating_id', models.IntegerField(primary_key=True, serialize=False)),
                ('number_of_stars', models.CharField(blank=True, max_length=45, null=True)),
                ('percent_people_vote', models.CharField(blank=True, max_length=45, null=True)),
                ('number_people_vote', models.CharField(blank=True, max_length=45, null=True)),
            ],
            options={
                'db_table': 'rating',
                'managed': False,
            },
        ),
        migrations.DeleteModel(
            name='Rating',
        ),
    ]
